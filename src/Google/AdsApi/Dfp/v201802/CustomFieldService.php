<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomFieldService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201802\\ObjectValue',
      'ActivateCustomFields' => 'Google\\AdsApi\\Dfp\\v201802\\ActivateCustomFields',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201802\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201802\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201802\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201802\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201802\\AuthenticationError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201802\\BooleanValue',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201802\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201802\\CommonError',
      'CustomFieldAction' => 'Google\\AdsApi\\Dfp\\v201802\\CustomFieldAction',
      'CustomField' => 'Google\\AdsApi\\Dfp\\v201802\\CustomField',
      'CustomFieldError' => 'Google\\AdsApi\\Dfp\\v201802\\CustomFieldError',
      'CustomFieldOption' => 'Google\\AdsApi\\Dfp\\v201802\\CustomFieldOption',
      'CustomFieldPage' => 'Google\\AdsApi\\Dfp\\v201802\\CustomFieldPage',
      'Date' => 'Google\\AdsApi\\Dfp\\v201802\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201802\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201802\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201802\\DateValue',
      'DeactivateCustomFields' => 'Google\\AdsApi\\Dfp\\v201802\\DeactivateCustomFields',
      'DropDownCustomField' => 'Google\\AdsApi\\Dfp\\v201802\\DropDownCustomField',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201802\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201802\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201802\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201802\\InternalApiError',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201802\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201802\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201802\\NumberValue',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201802\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201802\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201802\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201802\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201802\\QuotaError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201802\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201802\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201802\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201802\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201802\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201802\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201802\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201802\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201802\\String_ValueMapEntry',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201802\\TextValue',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201802\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201802\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201802\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201802\\Value',
      'createCustomFieldOptionsResponse' => 'Google\\AdsApi\\Dfp\\v201802\\createCustomFieldOptionsResponse',
      'createCustomFieldsResponse' => 'Google\\AdsApi\\Dfp\\v201802\\createCustomFieldsResponse',
      'getCustomFieldOptionResponse' => 'Google\\AdsApi\\Dfp\\v201802\\getCustomFieldOptionResponse',
      'getCustomFieldsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201802\\getCustomFieldsByStatementResponse',
      'performCustomFieldActionResponse' => 'Google\\AdsApi\\Dfp\\v201802\\performCustomFieldActionResponse',
      'updateCustomFieldOptionsResponse' => 'Google\\AdsApi\\Dfp\\v201802\\updateCustomFieldOptionsResponse',
      'updateCustomFieldsResponse' => 'Google\\AdsApi\\Dfp\\v201802\\updateCustomFieldsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201802/CustomFieldService?wsdl')
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
     * Creates new {@link CustomFieldOption} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link CustomFieldOption#displayName}</li>
     * <li>{@link CustomFieldOption#customFieldId}</li>
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201802\CustomFieldOption[] $customFieldOptions
     * @return \Google\AdsApi\Dfp\v201802\CustomFieldOption[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function createCustomFieldOptions(array $customFieldOptions)
    {
      return $this->__soapCall('createCustomFieldOptions', array(array('customFieldOptions' => $customFieldOptions)))->getRval();
    }

    /**
     * Creates new {@link CustomField} objects.
     *
     * The following fields are required:
     * <ul>
     * <li>{@link CustomField#name}</li>
     * <li>{@link CustomField#entityType}</li>
     * <li>{@link CustomField#dataType}</li>
     * <li>{@link CustomField#visibility}</li>
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201802\CustomField[] $customFields
     * @return \Google\AdsApi\Dfp\v201802\CustomField[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function createCustomFields(array $customFields)
    {
      return $this->__soapCall('createCustomFields', array(array('customFields' => $customFields)))->getRval();
    }

    /**
     * Returns the {@link CustomFieldOption} uniquely identified by the given ID.
     *
     * @param int $customFieldOptionId
     * @return \Google\AdsApi\Dfp\v201802\CustomFieldOption
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function getCustomFieldOption($customFieldOptionId)
    {
      return $this->__soapCall('getCustomFieldOption', array(array('customFieldOptionId' => $customFieldOptionId)))->getRval();
    }

    /**
     * Gets a {@link CustomFieldPage} of {@link CustomField} objects that satisfy the
     * given {@link Statement#query}.
     * The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link CustomField#id}</td>
     * </tr>
     * <tr>
     * <td>{@code entityType}</td>
     * <td>{@link CustomField#entityType}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link CustomField#name}</td>
     * </tr>
     * <tr>
     * <td>{@code isActive}</td>
     * <td>{@link CustomField#isActive}</td>
     * </tr>
     * <tr>
     * <td>{@code visibility}</td>
     * <td>{@link CustomField#visibility}</td>
     * </tr>
     * </table>
     *
     *
     * a set of custom fields.
     *
     * @param \Google\AdsApi\Dfp\v201802\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201802\CustomFieldPage
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function getCustomFieldsByStatement(\Google\AdsApi\Dfp\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('getCustomFieldsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link CustomField} objects that match the given
     * {@link Statement#query}.
     *
     * a set of custom fields
     *
     * @param \Google\AdsApi\Dfp\v201802\CustomFieldAction $customFieldAction
     * @param \Google\AdsApi\Dfp\v201802\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201802\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function performCustomFieldAction(\Google\AdsApi\Dfp\v201802\CustomFieldAction $customFieldAction, \Google\AdsApi\Dfp\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('performCustomFieldAction', array(array('customFieldAction' => $customFieldAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link CustomFieldOption} objects.
     *
     * @param \Google\AdsApi\Dfp\v201802\CustomFieldOption[] $customFieldOptions
     * @return \Google\AdsApi\Dfp\v201802\CustomFieldOption[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function updateCustomFieldOptions(array $customFieldOptions)
    {
      return $this->__soapCall('updateCustomFieldOptions', array(array('customFieldOptions' => $customFieldOptions)))->getRval();
    }

    /**
     * Updates the specified {@link CustomField} objects.
     *
     * @param \Google\AdsApi\Dfp\v201802\CustomField[] $customFields
     * @return \Google\AdsApi\Dfp\v201802\CustomField[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function updateCustomFields(array $customFields)
    {
      return $this->__soapCall('updateCustomFields', array(array('customFields' => $customFields)))->getRval();
    }

}
