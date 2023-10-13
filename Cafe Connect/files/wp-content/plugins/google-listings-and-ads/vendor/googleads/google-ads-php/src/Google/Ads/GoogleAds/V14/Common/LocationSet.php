<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/common/asset_set_types.proto

namespace Google\Ads\GoogleAds\V14\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data related to location set. One of the Google Business Profile (previously
 * known as Google My Business) data, Chain data, and map location data need to
 * be specified.
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.common.LocationSet</code>
 */
class LocationSet extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Immutable. Location Ownership Type (owned location or affiliate
     * location).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LocationOwnershipTypeEnum.LocationOwnershipType location_ownership_type = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $location_ownership_type = 0;
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $location_ownership_type
     *           Required. Immutable. Location Ownership Type (owned location or affiliate
     *           location).
     *     @type \Google\Ads\GoogleAds\V14\Common\BusinessProfileLocationSet $business_profile_location_set
     *           Data used to configure a location set populated from Google Business
     *           Profile locations.
     *     @type \Google\Ads\GoogleAds\V14\Common\ChainSet $chain_location_set
     *           Data used to configure a location on chain set populated with the
     *           specified chains.
     *     @type \Google\Ads\GoogleAds\V14\Common\MapsLocationSet $maps_location_set
     *           Only set if locations are synced based on selected maps locations
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Common\AssetSetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Immutable. Location Ownership Type (owned location or affiliate
     * location).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LocationOwnershipTypeEnum.LocationOwnershipType location_ownership_type = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getLocationOwnershipType()
    {
        return $this->location_ownership_type;
    }

    /**
     * Required. Immutable. Location Ownership Type (owned location or affiliate
     * location).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.enums.LocationOwnershipTypeEnum.LocationOwnershipType location_ownership_type = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setLocationOwnershipType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V14\Enums\LocationOwnershipTypeEnum\LocationOwnershipType::class);
        $this->location_ownership_type = $var;

        return $this;
    }

    /**
     * Data used to configure a location set populated from Google Business
     * Profile locations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.BusinessProfileLocationSet business_profile_location_set = 1;</code>
     * @return \Google\Ads\GoogleAds\V14\Common\BusinessProfileLocationSet|null
     */
    public function getBusinessProfileLocationSet()
    {
        return $this->readOneof(1);
    }

    public function hasBusinessProfileLocationSet()
    {
        return $this->hasOneof(1);
    }

    /**
     * Data used to configure a location set populated from Google Business
     * Profile locations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.BusinessProfileLocationSet business_profile_location_set = 1;</code>
     * @param \Google\Ads\GoogleAds\V14\Common\BusinessProfileLocationSet $var
     * @return $this
     */
    public function setBusinessProfileLocationSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Common\BusinessProfileLocationSet::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Data used to configure a location on chain set populated with the
     * specified chains.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.ChainSet chain_location_set = 2;</code>
     * @return \Google\Ads\GoogleAds\V14\Common\ChainSet|null
     */
    public function getChainLocationSet()
    {
        return $this->readOneof(2);
    }

    public function hasChainLocationSet()
    {
        return $this->hasOneof(2);
    }

    /**
     * Data used to configure a location on chain set populated with the
     * specified chains.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.ChainSet chain_location_set = 2;</code>
     * @param \Google\Ads\GoogleAds\V14\Common\ChainSet $var
     * @return $this
     */
    public function setChainLocationSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Common\ChainSet::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Only set if locations are synced based on selected maps locations
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.MapsLocationSet maps_location_set = 5;</code>
     * @return \Google\Ads\GoogleAds\V14\Common\MapsLocationSet|null
     */
    public function getMapsLocationSet()
    {
        return $this->readOneof(5);
    }

    public function hasMapsLocationSet()
    {
        return $this->hasOneof(5);
    }

    /**
     * Only set if locations are synced based on selected maps locations
     *
     * Generated from protobuf field <code>.google.ads.googleads.v14.common.MapsLocationSet maps_location_set = 5;</code>
     * @param \Google\Ads\GoogleAds\V14\Common\MapsLocationSet $var
     * @return $this
     */
    public function setMapsLocationSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V14\Common\MapsLocationSet::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

