<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemTemplateService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201805\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201805\\CompanyCreditStatusError',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\ContentMetadataTargetingError',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeError',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201805\\CrossSellError',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomTargetingError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\DayPartTargetingError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201805\\ForecastError',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201805\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\GenericTargetingError',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\GeoTargetingError',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201805\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201805\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201805\\InvalidUrlError',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemActivityAssociationError',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemCreativeAssociationError',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemOperationError',
      'LineItemTemplate' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemTemplate',
      'LineItemTemplatePage' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemTemplatePage',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201805\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201805\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201805\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201805\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201805\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201805\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201805\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201805\\TeamError',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201805\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201805\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTargetingError',
      'getLineItemTemplatesByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getLineItemTemplatesByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/LineItemTemplateService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets a {@link LineItemTemplatePage} of {@link LineItemTemplate} objects
     * that satisfy the given {@link Statement#query}. The following fields are
     * supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link LineItemTemplate#id}</td>
     * </tr>
     * </table>
     *
     * a set of line item templates
     *
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\LineItemTemplatePage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getLineItemTemplatesByStatement(\Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemTemplatesByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
