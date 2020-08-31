<?php
/**
 * Tests
 *
 * This is an example test file
 * php version 7.4.7
 *
 * @category Tests
 * @package  Drupal
 * @author   Carlos Ferraz <mail@carlosferraz.net>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://carlosferraz.net
 * @since    1.0.0
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * Tests
 *
 * This is an example test file
 * php version 7.4.7
 *
 * @category Tests
 * @package  Drupal
 * @author   Carlos Ferraz <mail@carlosferraz.net>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link     https://carlosferraz.net
 * @since    1.0.0
 */
class StackTest extends TestCase
{
    /**
     * Tests
     *
     * This is an example test file
     * php version 7.4.7
     *
     * @category Tests
     * @package  Drupal
     * @author   Carlos Ferraz <mail@carlosferraz.net>
     * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
     * @link     https://carlosferraz.net
     * @since    1.0.0
     * @return   void
     */
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }
}
