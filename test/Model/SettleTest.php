<?php
/**
 * SettleTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Reepay
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API
 *
 * REST API to manage Reepay resources
 *
 * OpenAPI spec version: 1
 * Contact: support@reepay.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.51
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Reepay;

use PHPUnit\Framework\TestCase;

/**
 * SettleTest Class Doc Comment
 *
 * @category    Class
 * @description Optional settle to perform after creation using a different payment method. If the settle fails the status will be &#x60;failed&#x60; if instant or &#x60;pending&#x60; if not instant. The &#x60;due&#x60; date will be ignored for subscription invoice create.
 * @package     Reepay
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SettleTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "Settle"
     */
    public function testSettle()
    {
    }

    /**
     * Test attribute "due"
     */
    public function testPropertyDue()
    {
    }

    /**
     * Test attribute "payment_method"
     */
    public function testPropertyPaymentMethod()
    {
    }
}
