commotion-docs
===================

commotion-docs is the canonical repository for the content and structure of http://commotionwireless.net.  This site uses the Jekyll static site generator, (http://jekyllrb.com/). 

The three core branches of commotion-docs are "test", "staging" and "master", which correspond to our test, staging and production websites.
- The **master** branch is the canonical, public website.
- The **staging** branch is for all content additions, updates, etc.
- The **test** branch is for prototyping all new non-content site features

## Installing Jekyll Locally
Install Jekyll locally on your machine to be able to preview your
feature branch changes. (http://jekyllrb.com/docs/installation/)

## Contribute Using Feature Branches
Use standard feature branches for updates to test and staging. Create a sub-branch from "staging" if you're working on a content change, and from "test" if you're working on a template or CSS.

## Testing Updates, Pull Requests from Feature branch to Staging/Test
Push your feature branch to github and create a pull request for staging
or test. Pull request testers will check the new branch locally,
complete the merge, then publish the update to the staging or test live
sites. These will continue to be password protected, but available to
staff to preview new content.

## Publishing - Pull Request from Staging to Master
When new content or features on staging or test are ready for
publishing, a pull request to master should be created and will get
merged by the maintainer(s).
