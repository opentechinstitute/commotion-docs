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
import shutil
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


def generate_doxygen_config(project, doxyconfigs, doxyconfdir, scriptdir, projectoutputdir, headerfilename, localprojectgit):
    conffileneame = "%s-doxygen.conf" % (project)
    conffilefullpath = "%s/%s" % (doxyconfdir, conffileneame)
    doxyconfigdefault =  doxyconfigs['default_doxygen_conf']
    s = """@INCLUDE_PATH = "%s"
@INCLUDE = "%s"
PROJECT_NAME = "%s"
OUTPUT_DIRECTORY = "%s"
HTML_HEADER ="%s"
HTML_FOOTER = "%s/footer.html"
USE_MDFILE_AS_MAINPAGE = "%s/README.md"
""" % (scriptdir, doxyconfigdefault, project, projectoutputdir, headerfilename,scriptdir,localprojectgit)

    for option in doxyconfigs:
        if option != "default_doxygen_conf" and option != "output_base_dir":
            value = doxyconfigs[option]
            s += """%s = "%s" 
""" % (option.upper(), value)
    f = open(conffilefullpath, 'w')
    f.write(s)
    return conffilefullpath

def generate_landing_pager_header(project, now):
    author = "Commotion"
    s = """---
layout: doxygen
title: API Reference - %s
site_section: developers
categories: 
created: %s
changed: %s
post_author: Commotion
lang: en
---
""" % (project, now, now)
    return s

def generate_project_menu_item(project, readme):
    if os.path.isfile(readme):
        s = "<li {% if page.url contains '/developer/api/"+ project +'\' %} class="active" {% endif %}><a href="/developer/api/' + project +'/html">'+ project +'</a></li>'
    else:
        s = "<li {% if page.url contains '/developer/api/"+ project +'\' %} class="active" {% endif %}><a href="/developer/api/' + project +'">'+ project +'</a></li>'
    return s

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

# create a directory to work in
tmpdir = "%s/commotion-doxygen-%s" % (workingdir,date)
if not os.path.isdir(tmpdir):
    os.mkdir("%s" % tmpdir)

menu = ''
for section_name in config.sections():
    if section_name != 'globals' and section_name != 'doxygen':
        project = section_name
        projectdir = "%s/%s" % (outputdir,project)
        projecttmp = "%s/%s" %(tmpdir, project)
        # we should blow away any previously 
        # generated documentation.
        os.system("git rm -r %s" %  projectdir)
        if not os.path.isdir(projectdir):
            os.mkdir("%s" % projectdir)

        if not os.path.isdir(projecttmp):
            os.mkdir(projecttmp)

        localprojectgit = "%s/%s" % (projecttmp, project)
        doxyconfdir = "%s/doxyconf" % (projecttmp)
        if not os.path.isdir(doxyconfdir):
            os.mkdir(doxyconfdir)

        headerfilename = "%s/%s-header.html" % (doxyconfdir,project) 
        generate_yaml_header(project, now, headerfilename)
        customdoxyconf = generate_doxygen_config(project, doxyconfigs, doxyconfdir, scriptdir, projectdir, headerfilename, localprojectgit)

        repo = None
        branch = 'master'
        for name, value in config.items(section_name):
            if value:
                if name == 'repo':
                    repo = value
                if name == 'branch':
                    branch = value


        os.system('git clone %s %s' % (repo, localprojectgit))
        os.chdir(localprojectgit)
        if branch != 'master':
            os.system("git checkout -b %s" % branch)

        # now to actually have doxygen generate something for the project.
        os.system('doxygen %s' % customdoxyconf)

        # and so that we have landing pages, use the README if it exists.
        readme = "%s/README.md" % localprojectgit
        index = "%s/index.md" % projectdir
        yaml = generate_landing_pager_header(project, now)
        if os.path.isfile(readme):
            shutil.copy(readme, index)
            with open(index,'r+') as f:
                content = f.read()
                f.seek(0,0)
                f.write(yaml.rstrip('\r\n') + '\n' + content)
        else:
            f = open(index, 'w')
            f.write("This project doesn't have a README.")

        menu += generate_project_menu_item(project, readme)

# remove the directory
shutil.rmtree(tmpdir)

#build the menu
menufile = '%s/_includes/developers_api_menu.html' % jekyllrepo
fullmenu = '<ul class="submenu">%s</ul>' % menu
f = open(menufile, 'w')
f.seek(0)
f.truncate()
f.write(fullmenu)
