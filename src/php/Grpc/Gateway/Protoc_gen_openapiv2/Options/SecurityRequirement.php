<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protoc-gen-openapiv2/options/openapiv2.proto

namespace Grpc\Gateway\Protoc_gen_openapiv2\Options;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `SecurityRequirement` is a representation of OpenAPI v2 specification's
 * Security Requirement object.
 *
 * See: https://github.com/OAI/OpenAPI-Specification/blob/3.0.0/versions/2.0.md#securityRequirementObject
 *
 * Lists the required security schemes to execute this operation. The object can
 * have multiple security schemes declared in it which are all required (that
 * is, there is a logical AND between the schemes).
 *
 * The name used for each property MUST correspond to a security scheme
 * declared in the Security Definitions.
 *
 * Generated from protobuf message <code>grpc.gateway.protoc_gen_openapiv2.options.SecurityRequirement</code>
 */
class SecurityRequirement extends \Google\Protobuf\Internal\Message
{
    /**
     * Each name must correspond to a security scheme which is declared in
     * the Security Definitions. If the security scheme is of type "oauth2",
     * then the value is a list of scope names required for the execution.
     * For other security scheme types, the array MUST be empty.
     *
     * Generated from protobuf field <code>map<string, .grpc.gateway.protoc_gen_openapiv2.options.SecurityRequirement.SecurityRequirementValue> security_requirement = 1 [json_name = "securityRequirement"];</code>
     */
    private $security_requirement;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $security_requirement
     *           Each name must correspond to a security scheme which is declared in
     *           the Security Definitions. If the security scheme is of type "oauth2",
     *           then the value is a list of scope names required for the execution.
     *           For other security scheme types, the array MUST be empty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ProtocGenOpenapiv2\Options\Openapiv2::initOnce();
        parent::__construct($data);
    }

    /**
     * Each name must correspond to a security scheme which is declared in
     * the Security Definitions. If the security scheme is of type "oauth2",
     * then the value is a list of scope names required for the execution.
     * For other security scheme types, the array MUST be empty.
     *
     * Generated from protobuf field <code>map<string, .grpc.gateway.protoc_gen_openapiv2.options.SecurityRequirement.SecurityRequirementValue> security_requirement = 1 [json_name = "securityRequirement"];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getSecurityRequirement()
    {
        return $this->security_requirement;
    }

    /**
     * Each name must correspond to a security scheme which is declared in
     * the Security Definitions. If the security scheme is of type "oauth2",
     * then the value is a list of scope names required for the execution.
     * For other security scheme types, the array MUST be empty.
     *
     * Generated from protobuf field <code>map<string, .grpc.gateway.protoc_gen_openapiv2.options.SecurityRequirement.SecurityRequirementValue> security_requirement = 1 [json_name = "securityRequirement"];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setSecurityRequirement($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grpc\Gateway\Protoc_gen_openapiv2\Options\SecurityRequirement\SecurityRequirementValue::class);
        $this->security_requirement = $arr;

        return $this;
    }

}
