<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */

/**
 * PHP version 5.3
 *
 * Copyright (c) 2012 GOTO Hidenori <hidenorigoto@gmail.com>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @package    phpkansai2012mockobject
 * @copyright  2012 GOTO Hidenori <hidenorigoto@gmail.com>
 * @license    http://www.opensource.org/licenses/bsd-license.php  New BSD License
 * @since      File available since Release 0.1.0
 */

use Acme\Order;
use Acme\OrderDetail;

/**
 * @package    phpkansai2012mockobject
 * @copyright  2012 GOTO Hidenori <hidenorigoto@gmail.com>
 * @copyright  2012 KUBO Atsuhiro <kubo@iteman.jp>
 * @license    http://www.opensource.org/licenses/bsd-license.php  New BSD License
 * @since      Class available since Release 0.1.0
 */
class BadOrderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function 料金計算テスト()
    {
        $order = new Order();

        $orderDetail1 = new OrderDetail($order);
        $orderDetail1->setItemNumber(1);
        $orderDetail1->setItemPrice(100);
        $orderDetail1->setQuantity(3);
        $order->addDetail($orderDetail1);

        $orderDetail2 = new OrderDetail($order);
        $orderDetail2->setItemNumber(2);
        $orderDetail2->setItemPrice(150);
        $orderDetail2->setQuantity(5);
        $order->addDetail($orderDetail2);

        $total = $order->calculate();

        $this->assertEquals(1050, $total);
    }
}

/*
 * Local Variables:
 * mode: php
 * coding: iso-8859-1
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * indent-tabs-mode: nil
 * End:
 */
