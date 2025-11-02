Undoing / Fixing Mistakes
Command	Description
git restore filename	Undo unstaged changes
git restore --staged filename	Unstage a file
git checkout -- filename	Restore file to last commit
git reset --soft HEAD~1	Undo last commit, keep changes staged
git reset --mixed HEAD~1	Undo last commit, keep changes unstaged
git reset --hard HEAD~1	Undo last commit completely
git revert <commit_id>	Create new commit that reverses an old one
git clean -fd	Remove untracked files and directories

⚠️ Careful: --hard deletes changes permanently!

















// important tags for all videos
//  php, php tutorial, php shorts, php for beginners, php programming, web development, php interview, php oops, php projects, php database
