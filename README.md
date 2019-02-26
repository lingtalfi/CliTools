CliTools
===========
2019-02-22



Suite of tools for creating cli programs. 


This is part of the [universe framework](https://github.com/karayabin/universe-snapshot).


Install
==========
Using the [uni](https://github.com/lingtalfi/universe-naive-importer) command.
```bash
uni import CliTools
```

Or just download it and place it where you want otherwise.






Summary
===========
- [CliTools api](https://github.com/lingtalfi/CliTools/blob/master/doc/api/CliTools.md) (generated with [DocTools](https://github.com/lingtalfi/DocTools))
- [Overview](#overview) 
- [History log](#history-log) 






About
=========

Cli tools is a suite of tools that helps you creating cli programs and applications.

The difference between a program and an application is explained in the [ProgramInterface page](https://github.com/lingtalfi/CliTools/blob/master/doc/api/CliTools/Program/ProgramInterface.md).

Basically, both programs and applications have a run method, which accepts an [Input](https://github.com/lingtalfi/CliTools/blob/master/doc/api/CliTools/Input/InputInterface.md) and an [Output](https://github.com/lingtalfi/CliTools/blob/master/doc/api/CliTools/Output/OutputInterface.md) object.

Also, both programs and applications use the [bashtml language](https://github.com/lingtalfi/CliTools/blob/master/doc/pages/bashtml.md) natively by default.

They also agree on the definition of what the [command line](https://github.com/lingtalfi/CliTools/blob/master/doc/pages/command-line.md) is.


The main difference is that the application uses commands, whereas the program doesn't. 


To dive in, you should start by reading the examples from the [AbstractProgram page](https://github.com/lingtalfi/CliTools/blob/master/doc/api/CliTools/Program/AbstractProgram.md).






Side note
---------
Note: this planet is a re-fork from my old [CommandLineInput planet](https://github.com/lingtalfi/CommandLineInput), which implementation I was not happy with.

Note2: most of this planet code was stolen from the more powerful (gui like app with widgets like menus, animations in console, ...) but unfortunately undocumented [Komin> console component](https://github.com/lingtalfi/Komin/tree/master/Component/Console),
and the [Symfony/Console](https://github.com/symfony/symfony/tree/master/src/Symfony/Component/Console) code.

 



History Log
=================
    
- 1.0.0 -- 2019-02-22

    - initial commit
    