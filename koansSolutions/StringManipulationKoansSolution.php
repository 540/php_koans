<?php
namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class StringManipulationKoansSolution extends TestCase
{
    /**
     * @test
     * @testdox You can interpolate variables in a double-quoted string
     */
    public function usesStringInterpolationInDoubleQuotedString()
    {
        $value = "one";
        $string = "The value is $value";

        $this->assertEquals('The value is one', $string);
    }

    /**
     * @test
     * @testdox You cannot interpolate variables in a single-quoted string
     */
    public function stringInterpolationWillNotWorkInSingleQuotedString()
    {
        $value = "one";
        $string = 'The value is $value';

        $this->assertEquals('The value is $value', $string);
    }

    /**
     * @test
     * @testdox Another option for variable interpolation in a double-quoted string is with curly brackets
     */
    public function usesStringInterpolationWithCurlyBrackets()
    {
        $value = "one";
        $string = "The value is {$value}";

        $this->assertEquals('The value is one', $string);
    }

    /**
     * @test
     * @testdox If one wants to interpolate associative array elements, one must use curly brackets
     */
    public function interpolatingAssociativeArrayElementsMustBeInCurlyBrackets()
    {
        $values = ["test" => "one", "foo" => "two"];
        $string = "The value is {$values["test"]}";

        $this->assertEquals('The value is one', $string);
    }

    /**
     * @test
     * @testdox Heredoc interpolates like a double-quoted string
     */
    public function heredocInterpolatesLikeADoubleQuotedString()
    {
        $value = "one";
        $string = <<<EOT
        The value is $value
        EOT;

        // Hint: First and last line breaks of a Heredoc don't count
        $this->assertEquals('The value is one', $string);
    }

    /**
     * @test
     * @testdox Nowdoc interpolates like a single-quoted string
     */
    public function nowdocInterpolatesLikeASingleQuotedString()
    {
        $value = "one";
        $string = <<<'EOT'
        The value is $value
        EOT;

        // Hint: First and last line breaks of a Heredoc don't count
        $this->assertEquals('The value is $value', $string);
    }

    /**
     * @test
     * @testdox You can format a string using sprintf
     */
    public function usesStringFormattingWithSprintf()
    {
        $product = "banana";

        $string = sprintf('He bought a %s.', $product);

        $this->assertEquals('He bought a banana.', $string);
    }

    /**
     * @test
     * @testdox When formatting a string with sprintf, use different type specifiers for the different types of variables
     */
    public function stringFormattingWithSprintfWithTypeSpecifiers()
    {
        $product = "bananas";
        $quantity = 3;
        $pricePer = 2.5;

        // Be careful of the default floating point precision (6 decimal places)
        $string = sprintf('He bought %d %s for $%f.', $quantity, $product, $pricePer);

        $this->assertEquals('He bought 3 bananas for $2.500000.', $string);
    }

    /**
     * @test
     * @testdox Complex string formatting can be done with sprintf
     */
    public function usesComplexStringFormattingWithSprintf()
    {
        $product = "bananas";
        $quantity = 3;
        $pricePer = 2.5;

        // For more information see: https://secure.php.net/manual/en/function.sprintf.php
        $string = sprintf(
            'He bought %d %s for $%.2f each, but those %1$d %2$s were not worth the price.',
            $quantity,
            $product,
            $pricePer
        );

        $this->assertEquals('He bought 3 bananas for $2.50 each, but those 3 bananas were not worth the price.', $string);
    }

    /**
     * @test
     * @testdox You can extract a substring from another string
     */
    public function extractsAStringFromAString()
    {
        $string = "Bacon, lettuce and tomato";

        $this->assertEquals('lettuce an', substr($string, 7, 10));
    }

    /**
     * @test
     * @testdox You can get a single character from a string using an array index
     */
    public function getsASingleCharacterFromAString()
    {
        $string = "Bacon, lettuce and tomato";

        $this->assertEquals('a', $string[1]);
    }

    /**
     * @test
     * @testdox Strings can be split
     */
    public function splitsTheStringIntoAnArray()
    {
        $string = "Sausage Egg Cheese";
        $words = explode(" ", $string);

        $this->assertEquals(['Sausage', 'Egg', 'Cheese'], $words);
    }

    /**
     * @test
     * @testdox Strings can be joined
     */
    public function joinsTheArrayInAString()
    {
        $words = ["Now", "is", "the", "time"];
        $string = implode(" ", $words);

        $this->assertEquals('Now is the time', $string);
    }

    /**
     * @test
     * @testdox You can change the case of strings
     */
    public function changesTheCaseOfTheStrings()
    {
        $this->assertEquals('One Hand Clap', ucwords('one hand clap'));
        $this->assertEquals('ONE HAND CLAP', strtoupper('one hand clap'));
        $this->assertEquals('sausage egg cheese', strtolower('Sausage EGG Cheese'));
    }
}
