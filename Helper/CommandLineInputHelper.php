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
}