#!/usr/bin/python
#
# This script is intended as a helper script for generating Doxygen
# documentation for the Commotion Wireless project.
#
# This script is distributed under the terms of the GNU General Public
# License version 3.
#
# Authors: Nat Meysenburg (2014)

import os
import configparser
import datetime

def generate_yaml_header(project, now, headerfilename):
    author = "Commotion"
    s = """---
layout: doxygen
title: API Reference - %s
site_section: developers
categories: 
created: %s
changed: %s
post_author: %s
lang: %s
---

<div id="doxygen">
<div id="top"><!-- do not remove this div, it is closed by doxygen! -->
<!-- end header part --> 
""" % (project, now, now, author, 'en')

    f = open(headerfilename, 'w')
    f.write(s)


def generate_doxygen_config(project, doxyconfigs, scriptdir, projectoutputdir, headerfilename):
    conffileneame = "%s-doxygen.conf" % (project)
    conffilefullpath = "%s/%s" % (doxyconfdir, conffileneame)
    doxyconfigdefault =  doxyconfigs['default_doxygen_conf']
    s = """@INCLUDE_PATH = "%s"
@INCLUDE = "%s"
PROJECT_NAME = "%s"
OUTPUT_DIRECTORY = "%s"
HTML_HEADER ="%s"
""" % (scriptdir, doxyconfigdefault, project, projectoutputdir, headerfilename)

    for option in doxyconfigs:
        if option != "default_doxygen_conf" and option != "output_base_dir":
            value = doxyconfigs[option]
            s += """%s = "%s" """ % (option.upper(), value)
    f = open(conffilefullpath, 'w')
    f.write(s)
    return conffilefullpath


# set up config parser to read config
config = configparser.SafeConfigParser()
config.read('./generate-commotion-doxygen.conf')

# grab some global settings
scriptdir = os.getcwd()
doxyconfigs = config['doxygen']
outputdir = config['doxygen']['output_base_dir']
workingdir = config['globals']['workingdir']
jekyllrepo = config['globals']['jekyll_repo']
now = datetime.datetime.now()
date = now.strftime("%Y-%m-%d_%H-%M")

# first we want to be working in our own branch for the site.
os.chdir(jekyllrepo)
branchname = "doxygen-%s" % date
os.system("git checkout -b %s" % branchname)
# now that we're in a branch, we should blow away any previously 
# generated documentation.
os.system("git rm %s" % outputdir)

# create a directory to work in
tmpdir = "%s/commotion-doxygen-%s" % (workingdir,date)
if not os.path.isdir(tmpdir):
    os.mkdir("%s" % tmpdir)

for section_name in config.sections():
    if section_name != 'globals' and section_name != 'doxygen':
        project = section_name
        repo = None
        branch = None
        projectdir = "%s/%s" % (outputdir,project)
        localprojectgit = "%s/%s" % (tmpdir, project)
        doxyconfdir = "%s/%s" % (tmpdir, project)
        if not os.path.isdir(doxyconfdir):
            os.mkdir(doxyconfdir)
        headerfilename = "%s/%s-header.html" % (doxyconfdir,project) 
        generate_yaml_header(project, now, headerfilename)
        projectoutputdir = "%s/%s" % (outputdir,project)
        customdoxyconf = generate_doxygen_config(project, doxyconfigs, scriptdir, projectoutputdir, headerfilename)

        print "Reading over the configurations for %s." % project
        for name, value in config.items(section_name):
            if value:
                if name == 'repo':
                    repo = value
                if name == 'branch':
                    branch = value

        if not os.path.isdir(projectdir):
            print "  ... Creating a new site directory for %s at %s" % (project,projectdir)
            os.mkdir("%s" % projectdir)

        os.system('git clone %s %s' % (repo, localprojectgit))
        os.chdir(localprojectgit)
        if branch != 'master':
            os.system("git checkout -b %s" % branch)

        # now to actually have doxygen generate something for the project.
        os.system('doxygen %s' % customdoxyconf)

