<?php
namespace PhpKoans;

use PHPUnit\Framework\TestCase;

defined('__') or define('__', null);

class StringManipulationKoans extends TestCase
{
    /**
     * @test You can interpolate variables in a double-quoted string
     */
    public function useStringInterpolationInDoubleQuotedString()
    {
        $value = "one";
        $string = "The value is $value";

        $this->assertEquals(__, $string);
    }

    /**
     * @test You cannot interpolate variables in a single-quoted string
     */
    public function stringInterpolationWillNotWorkInSingleQuotedString()
    {
        $value = "one";
        $string = 'The value is $value';

        $this->assertEquals(__, $string);
    }

    /**
     * @test Another option for variable interpolation in a double-quoted string is with curly brackets
     */
    public function useStringInterpolationWithCurlyBrackets()
    {
        $value = "one";
        $string = "The value is {$value}";

        $this->assertEquals(__, $string);
    }

    /**
     * @test If one wants to interpolate associative array elements, one must use curly brackets
     */
    public function interpolatingAssociativeArrayElementsMustBeInCurlyBrackets()
    {
        $values = ["test" => "one", "foo" => "two"];
        $string = "The value is {$values["test"]}";

        $this->assertEquals(__, $string);
    }

    /**
     * @test Heredoc interpolates like a double-quoted string
     */
    public function heredocInterpolatesLikeADoubleQuotedString()
    {
        $value = "one";
        $string = <<<EOT
        The value is $value
        EOT;

        // Hint: First and last line breaks of a Heredoc don't count
        $this->assertEquals(__, $string);
    }

    /**
     * @test Nowdoc interpolates like a single-quoted string
     */
    public function nowdocInterpolatesLikeASingleQuotedString()
    {
        $value = "one";
        $string = <<<'EOT'
        The value is $value
        EOT;

        // Hint: First and last line breaks of a Heredoc don't count
        $this->assertEquals(__, $string);
    }

    /**
     * @test You can format a string using sprintf
     */
    public function useStringFormattingWithSprintf()
    {
        $product = "banana";

        $string = sprintf('He bought a %s.', $product);

        $this->assertEquals(__, $string);
    }

    /**
     * @test When formatting a string with sprintf, use different type specifiers for the different types of variables
     */
    public function stringFormattingWithSprintfWithTypeSpecifiers()
    {
        $product = "bananas";
        $quantity = 3;
        $pricePer = 2.5;

        // Be careful of the default floating point precision (6 decimal places)
        $string = sprintf('He bought %d %s for $%f.', $quantity, $product, $pricePer);

        $this->assertEquals(__, $string);
    }

    /**
     * @test Complex string formatting can be done with sprintf
     */
    public function useComplexStringFormattingWithSprintf()
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

        $this->assertEquals(__, $string);
    }

    /**
     * @test You can extract a substring from another string
     */
    public function extractAStringFromAString()
    {
        $string = "Bacon, lettuce and tomato";

        $this->assertEquals(__, substr($string, 7, 10));
    }

    /**
     * @test You can get a single character from a string using an array index
     */
    public function getASingleCharacterFromAString()
    {
        $string = "Bacon, lettuce and tomato";

        $this->assertEquals(__, $string[1]);
    }

    /**
     * @test Strings can be split
     */
    public function splitTheStringIntoAnArray()
    {
        $string = "Sausage Egg Cheese";
        $words = explode(" ", $string);

        $this->assertEquals([__, __, __], $words);
    }

    /**
     * @test Strings can be joined
     */
    public function joinTheArrayInAString()
    {
        $words = ["Now", "is", "the", "time"];
        $string = implode(" ", $words);

        $this->assertEquals(__, $string);
    }

    /**
     * @test You can change the case of strings
     */
    public function changeTheCaseOfTheStrings()
    {
        $this->assertEquals(__, ucwords('one hand clap'));
        $this->assertEquals(__, strtoupper('one hand clap'));
        $this->assertEquals(__, strtolower('Sausage EGG Cheese'));
    }
}
