<?php


namespace Ling\CliTools\Helper;

use Ling\CliTools\Input\InputInterface;
use Ling\CliTools\Input\WritableCommandLineInput;

/**
 * The CommandLineInputHelper class.
 */
class CommandLineInputHelper
{


    /**
     * Returns a WritableCommandLineInput instance, copy of the given input.
     *
     * Available options are:
     * - parameters: array of new parameters to use instead of the one from the given input
     *
     *
     *
     * @param InputInterface $input
     * @param array $options
     * @return WritableCommandLineInput
     */
    public static function getInputWritableCopy(InputInterface $input, array $options = [])
    {

        $parameters = $options['parameters'];

        /**
         * re-forging the input so that the executing app doesn't see the difference.
         */
        $proxyInput = new WritableCommandLineInput();
        $proxyInput->setParameters($parameters);
        $flags2 = [];
        $flags = $input->getFlags();
        foreach ($flags as $flag) {
            $flags2[$flag] = true;
        }
        $proxyInput->setFlags($flags2);
        $proxyInput->setOptions($input->getOptions());
        return $proxyInput;
    }


    /**
     * Returns the argv array version of the given param string.
     * This method assumes that the php cli is available as "php" on your system.
     *
     * https://stackoverflow.com/questions/34868421/get-argv-from-a-string-with-php
     *
     * @param string $str
     * @return array
     */
    public static function paramStringToArgv(string $str): array
    {
        // the array shift removes the dash I had as first element of the argv, your mileage may vary
        $serializedArguments = shell_exec(
            sprintf('php -r "array_shift(\\$argv); echo serialize(\\$argv);" -- %s', $str)
        );
        return unserialize($serializedArguments);
    }
}