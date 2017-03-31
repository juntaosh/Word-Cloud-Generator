echo "Entering destination folder"
cd /home/student/Desktop/Word-Cloud-Generatpr/Project

echo "\n\n\nRunning frequencySort Testing"
phpunit ./tests/frequencySortTest.php

echo "\n\n\nRunning wordcountTest Testing"
phpunit ./tests/wordcountTest.php

echo "\n\n\nRunning javascript Testing"
mocha ./tests/request.test.js

echo "\n\n\nStarting selenium server"
cd /home/student/Downloads/
java -jar selenium-server-standalone-2.53.1.jar &


