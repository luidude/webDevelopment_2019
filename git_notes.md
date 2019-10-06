# GIT CheatSheet

https://towardsdatascience.com/getting-started-with-git-and-github-6fcd0f2d4ac6

## What git is not.
    -Git is not a text editor. 
        Git just keeps track of files that have changed.
    -GIT is not an FTP client.
        Git can be used to move files back forth between systems.
    -GIT is not Github or Bitbucket
        Github and bitbucket are just services that host 'Git' based repositories.

## What git is.
    -Git is a program that runs on you computer.
        examples are SourceTree or command line executable 'git'
    -Git is a version control system
        It is a way to keep track of changes of the files in your code.
        It allows you to share your code/project. 
        It allows you to collaborate with other people in a systematic way. 


## Terms:
'git': version control software/application/technology
'github': code hositing platform.
'repository': The code base that is being tracked for changes.
'origin': The version of the repository that hosted off site. ex. Bitbucket, Github, etc...
    - After editing your code changes can be pushed back to 'origin.'
'clone' repo: copy repository to your local computer file system.
'branch' a copy of the codebase.
    - you can create as many branches (copies) of your codebase as you want.
    - branches can live on your local machine or at origin.
    - you are always editing against a branch.
    - be mindful of what branch you are working on. 
'commit' save edits to the branch that you are currently working on. 
    - These are changes that will be pushed back to repository.
    - each commit generates an identifies version of the code base.
'push' Pushed codebase back to 'origin', github.com.    
'pull' pulls code changes down from 'origin'
'checkout' allows you to change between different branches.
'merge' combine two branches.
    - Command is used to merge changes from one branch to another.
'stage' in order to commit changes you need to tell git what files you want to commit. 
    - only 'staged' file will be included in a commit.
'status' Git command that will tell you what files have been changed as well as tell you what files are staged.




Branches:
'master" branch is the main code repository. 
    - Ideally only working code should be merged into the master branch.
    - When collaborating with other developers you should not edit the 'master' branch directly.

Ideal workflow:
    1. Cehck out master branch.
        git checkout master
    2. Create new 'working' branch from master branch. There should be no spaces in new branch name.
        git branch myNewbranch
    3. edit working branch. 
    4. commit changese