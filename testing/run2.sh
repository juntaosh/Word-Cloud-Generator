echo "\n\n\nRunning Behat"
cd /home/student/Desktop/Word-Cloud-Generator/Project

echo "\n\n\n Search.feature"
bin/behat features/search.feature


echo "\n\n\n Share.feature"
bin/behat features/share.feature
