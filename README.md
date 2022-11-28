DEMO SYMFONY PROJECT TO SHOW addMethodCall() BUG
================================================

This repo represents a fresh installation of Symfony 5.4.15, with only the necessary code to reproduce bug [https://github.com/symfony/symfony/issues/48355](https://github.com/symfony/symfony/issues/48355)

To reproduce the issue:

1. clear cache
2. run `bin/console bin/console app:demo-command:working` -> this works fine
3. run `bin/console bin/console app:demo-command:bugged` -> this shows the possible bug

