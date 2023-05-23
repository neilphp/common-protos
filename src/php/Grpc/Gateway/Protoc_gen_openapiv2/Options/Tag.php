<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protoc-gen-openapiv2/options/openapiv2.proto

namespace Grpc\Gateway\Protoc_gen_openapiv2\Options;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `Tag` is a representation of OpenAPI v2 specification's Tag object.
 * See: https://github.com/OAI/OpenAPI-Specification/blob/3.0.0/versions/2.0.md#tagObject
 *
 * Generated from protobuf message <code>grpc.gateway.protoc_gen_openapiv2.options.Tag</code>
 */
class Tag extends \Google\Protobuf\Internal\Message
{
    /**
     * A short description for the tag. GFM syntax can be used for rich text
     * representation.
     *
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     */
    protected $description = '';
    /**
     * Additional external documentation for this tag.
     *
     * Generated from protobuf field <code>.grpc.gateway.protoc_gen_openapiv2.options.ExternalDocumentation external_docs = 3 [json_name = "externalDocs"];</code>
     */
    protected $external_docs = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $description
     *           A short description for the tag. GFM syntax can be used for rich text
     *           representation.
     *     @type \Grpc\Gateway\Protoc_gen_openapiv2\Options\ExternalDocumentation $external_docs
     *           Additional external documentation for this tag.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ProtocGenOpenapiv2\Options\Openapiv2::initOnce();
        parent::__construct($data);
    }

    /**
     * A short description for the tag. GFM syntax can be used for rich text
     * representation.
     *
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A short description for the tag. GFM syntax can be used for rich text
     * representation.
     *
     * Generated from protobuf field <code>string description = 2 [json_name = "description"];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Additional external documentation for this tag.
     *
     * Generated from protobuf field <code>.grpc.gateway.protoc_gen_openapiv2.options.ExternalDocumentation external_docs = 3 [json_name = "externalDocs"];</code>
     * @return \Grpc\Gateway\Protoc_gen_openapiv2\Options\ExternalDocumentation|null
     */
    public function getExternalDocs()
    {
        return $this->external_docs;
    }

    public function hasExternalDocs()
    {
        return isset($this->external_docs);
    }

    public function clearExternalDocs()
    {
        unset($this->external_docs);
    }

    /**
     * Additional external documentation for this tag.
     *
     * Generated from protobuf field <code>.grpc.gateway.protoc_gen_openapiv2.options.ExternalDocumentation external_docs = 3 [json_name = "externalDocs"];</code>
     * @param \Grpc\Gateway\Protoc_gen_openapiv2\Options\ExternalDocumentation $var
     * @return $this
     */
    public function setExternalDocs($var)
    {
        GPBUtil::checkMessage($var, \Grpc\Gateway\Protoc_gen_openapiv2\Options\ExternalDocumentation::class);
        $this->external_docs = $var;

        return $this;
    }

}

