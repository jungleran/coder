<?php

namespace Drupal\Test\Classes;

use Drupal\Test\CoderSniffUnitTest;

class ClassOrInterfaceNameNotIdenticalWithFilenameUnitTest extends CoderSniffUnitTest
{


    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @param string $testFile The name of the file being tested.
     *
     * @return array<int, int>
     */
    protected function getErrorList(string $testFile): array
    {
        return [];

    }//end getErrorList()


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @param string $testFile The name of the file being tested.
     *
     * @return array<int, int>
     */
    protected function getWarningList(string $testFile): array
    {
        if ($testFile === 'ClassOrInterfaceNameNotIdenticalWithFilename.inc') {
            return [6 => 1];
        }

        if ($testFile === 'ClassOrInterfaceNameNotIdenticalWithFilenameInterface.inc') {
            return [6 => 1];
        }

        return [];

    }//end getWarningList()


    /**
     * Returns a list of test files that should be checked.
     *
     * @param string $testFileBase The base path that the unit tests files will have.
     *
     * @return array<string>
     */
    protected function getTestFiles($testFileBase): array
    {
        return [
            __DIR__.'/ClassOrInterfaceNameNotIdenticalWithFilename.inc',
            __DIR__.'/ClassOrInterfaceNameNotIdenticalWithFilenameInterface.inc',
        ];

    }//end getTestFiles()


}//end class
