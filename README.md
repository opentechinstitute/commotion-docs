commotion-docs
===================

commotion-docs is the canonical repository for the content and structure of http://commotionwireless.net.  This site uses the Jekyll static site generator, (http://jekyllrb.com/). 

## Issue Submission
Before submitting and issue, please check the existing issue queue to confirm that someone else has not already submitted a similar or duplicate issue.

New issues generally should address content additions, changes, or deletions; or should be about the site's structure, design, layout, etc. When submitting a new issue please be specific and provide detailed information on what is wrong or what is being requested. 

For example, if the issue is about a bad link on a page, it would be useful to provide a link to the page where the bad link resides, the link in it's current state, and what the link should be changed to if you know it. 

Another example: a new page needs to be created and you've prototyped some content for it (perhaps on our wiki). Your issue should include information about the section of the website in which the new page should be placed, the sub-section if appropriate, or indicate if a brand new section is being suggested.

If there is any question about the level of detail needed, rest assured the maintainer will ask for it, or reject your issue, so providing useful information when you submit an issue will ensure it is queued up to get resolved in a timely manner.

## Quick Start for Editors and Contributors 
There are several ways to contribute to content in this repo, depending on interest and skill level. Tools like Prose.io (http://prose.io/) will allow you edit github files directly in your web browser. However, there is much more flexibility if you are willing to use git directly or use a Github desktop client in concert with a text editor on your computer. OTI staff will be supported on editing workflow and tools.

If you already are comfortable with using git, the command line interface and a text editor, read on.

### Install Jekyll on Your Local Machine
- Install Jekyll locally on your machine to be able to preview your feature branch changes. (http://jekyllrb.com/docs/installation/)
- Clone the commotion-docs repo: clone https://github.com/opentechinstitute/commotion-docs.git
- Enter the test.commotion directory and run: `sudo jekyll serve`
- This instructs Jekyll to generate the site and start a small webserver on your local machine running the newly generated site (see http://jekyllrb.com/docs/usage/).

## Commotion-Docs Branches
The three core branches of commotion-docs are "test", "staging" and "master", which correspond to our test, staging and production websites.
- The **master** branch is the canonical, public website.
- The **staging** branch is for all content additions, updates, etc.
- The **test** branch is for prototyping all new non-content site features

## Contribute Using Feature Branches
Use standard feature branches for updates to test and staging. Create a sub-branch from "staging" if you're working on a content change, and from "test" if you're working on a template or CSS.

## Testing Updates, Pull Requests from Feature branch to Staging/Test
The best way to preview feature branch changes is to preview the site using a local Jekyll installation as described above. When your work is ready, push your feature branch to github and create a pull request for staging or test. 

Pull request testers should check out the new branch locally, build and test it using a local Jekyll install, 
complete the merge. The site admin will pull in new changes upon request, publishing the update to the staging or test live sites. These will continue to be password protected, but available to staff to preview new content.

## Publishing - Pull Request from Staging to Master
When new content or features on staging or test are ready for
publishing, a pull request to master should be created and will get
merged by the maintainer(s).
