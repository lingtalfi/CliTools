[Back to the Ling/CliTools api](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools.md)<br>
[Back to the Ling\CliTools\Helper\QuestionHelper class](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Helper/QuestionHelper.md)


QuestionHelper::askYesNo
================



QuestionHelper::askYesNo — Asks the given question to the user, and returns the answer, only if it's y or n.




Description
================


public static [QuestionHelper::askYesNo](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Helper/QuestionHelper/askYesNo.md)([Ling\CliTools\Output\OutputInterface](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Output/OutputInterface.md) $output, string $question) : string




Asks the given question to the user, and returns the answer, only if it's y or n.
If it's something else, ask to try again until the answer is y or n.




Parameters
================


- output

    

- question

    


Return values
================

Returns string.








Source Code
===========
See the source code for method [QuestionHelper::askYesNo](https://github.com/lingtalfi/CliTools/blob/master/Helper/QuestionHelper.php#L57-L69)


See Also
================

The [QuestionHelper](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Helper/QuestionHelper.md) class.

Previous method: [ask](https://github.com/lingtalfi/CliTools/blob/master/doc/api/Ling/CliTools/Helper/QuestionHelper/ask.md)<br>

