<?php
/**
 * @version $Id$
 * @package    VirtueMart
 * @subpackage Plugins  - Eway
 * @package VirtueMart
 * @subpackage Payment
 * @link ${PHING.VM.MAINTAINERURL}
 *
 * @copyright Copyright (c) 2015 Web Active Corporation Pty Ltd
 *
 * @license MIT License GNU/GPL, see LICENSE.php
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 * and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 */
namespace Eway\Rapid\Contract\Http;

/**
 * Interface ResponseInterface.
 */
interface ResponseInterface
{
    /**
     * Gets the body of the message.
     *
     * @return string
     */
    public function getBody();

    /**
     * Gets the response status code.
     *
     * The status code is a 3-digit integer result code of the server's attempt
     * to understand and satisfy the request.
     *
     * @return int Status code.
     */
    public function getStatusCode();

    /**
     * Gets the error message if one occurred
     *
     * @return string
     */
    public function getError();
}
