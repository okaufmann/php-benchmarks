<?php

namespace App\Tests\Benchmark;

use PhpBench\Attributes as Bench;

class StringConcatenationBench
{
    #[Bench\Warmup(10)]
    #[Bench\Revs(10000)]
    #[Bench\Iterations(100)]
    public function benchConcatWithDots()
    {
        $part1 = static::$content;
        $part2 = static::$content;
        $part3 = static::$content;
        $part4 = static::$content;
        $part5 = static::$content;

        return $part1.$part2.$part3.$part4.$part5;
    }

    #[Bench\Warmup(10)]
    #[Bench\Revs(10000)]
    #[Bench\Iterations(100)]
    public function benchConcatWithInterpolation()
    {
        $part1 = static::$content;
        $part2 = static::$content;
        $part3 = static::$content;
        $part4 = static::$content;
        $part5 = static::$content;

        return "{$part1}{$part2}{$part3}{$part4}{$part5}";
    }

    #[Bench\Warmup(10)]
    #[Bench\Revs(10000)]
    #[Bench\Iterations(100)]
    public function benchContactWithSprinf()
    {
        $part1 = static::$content;
        $part2 = static::$content;
        $part3 = static::$content;
        $part4 = static::$content;
        $part5 = static::$content;

        return sprintf('%s%s%s%s%s', $part1, $part2, $part3, $part4, $part5);
    }

    public static $content = 'Himenaeos hendrerit ut lorem sodales cum adipiscing tellus tristique aliquam, libero duis dolor eros sed suspendisse morbi auctor sem blandit, nisl est at sagittis fusce tempor lacinia ante. Viverra ac nam lacinia curabitur dignissim, metus primis eget aptent taciti, molestie donec elit platea. Dictumst sociosqu dolor quis scelerisque mattis netus dictum convallis nascetur, curabitur maecenas et proin hac justo luctus quisque, facilisis fermentum risus vulputate gravida venenatis dignissim curae. Porta sociis mi facilisi pretium nec morbi dictumst, id libero elementum dolor aliquet adipiscing lectus, augue penatibus est fermentum habitasse urna. Ante volutpat justo duis nec senectus est sem id scelerisque diam, dignissim eget nostra quis gravida nam non inceptos bibendum sociosqu, dui fusce a dis curae dictum aliquet eu nascetur. Ultrices adipiscing ornare taciti commodo sit eros, velit egestas natoque tempor cras magna, purus netus platea massa hac. Primis dis ad habitasse adipiscing velit netus purus, elit commodo natoque torquent facilisi non curae, dictum lacus bibendum quisque eros inceptos. Lacus vestibulum per feugiat ac convallis dolor suscipit nam congue vulputate elementum erat fermentum, pharetra hendrerit posuere lacinia imperdiet ad lectus accumsan libero dui viverra orci. Nulla ultrices laoreet proin auctor primis sapien accumsan in, magnis himenaeos penatibus ac congue vestibulum sed, vel torquent pharetra montes viverra leo suspendisse. Vel massa mattis cum dignissim auctor litora ridiculus, nostra mauris ligula gravida sem posuere sodales platea, vulputate per tristique integer tempor erat.';
}
