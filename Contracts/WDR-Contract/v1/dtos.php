<?php
/* based on ORSCF StudyWorkflowDefinition Contract v1.9.0.11838 */

include 'models.php';

/*
* Contains arguments for calling 'SearchFhirQuestionaires'.
* Method: Lists all FHIR Questionaires
*/
public class SearchFhirQuestionairesRequest {
  
}

/*
* Contains results from calling 'SearchFhirQuestionaires'.
* Method: Lists all FHIR Questionaires
*/
public class SearchFhirQuestionairesResponse {
  
  // Out-Argument of 'SearchFhirQuestionaires' (array)
  #[Required]
  public array $result;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ExportFhirQuestionaire'.
* Method: Exports a FHIR Questionaire by its given
* 'questionaireIdentifyingUrl' and 'questionaireVersion'
*/
public class ExportFhirQuestionaireRequest {
  
  // Required Argument for 'ExportFhirQuestionaire' (string)
  #[Required]
  public string $questionaireIdentifyingUrl;
  
  // Required Argument for 'ExportFhirQuestionaire' (string)
  #[Required]
  public string $questionaireVersion;
  
}

/*
* Contains results from calling 'ExportFhirQuestionaire'.
* Method: Exports a FHIR Questionaire by its given
* 'questionaireIdentifyingUrl' and 'questionaireVersion'
*/
public class ExportFhirQuestionaireResponse {
  
  // Out-Argument of 'ExportFhirQuestionaire' (bool)
  #[Required]
  public bool $wasFound;
  
  // Out-Argument of 'ExportFhirQuestionaire' (string)
  #[Required]
  public string $fhirContent;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ImportFhirQuestionaire'.
* Method: Imports a FHIR Questionaire into the Repository
* The 'questionaireIdentifyingUrl' and 'questionaireVersion'
* will be taken from the 'fhirContent'
*/
public class ImportFhirQuestionaireRequest {
  
  // Required Argument for 'ImportFhirQuestionaire' (string)
  #[Required]
  public string $fhirContent;
  
}

/*
* Contains results from calling 'ImportFhirQuestionaire'.
* Method: Imports a FHIR Questionaire into the Repository
* The 'questionaireIdentifyingUrl' and 'questionaireVersion'
* will be taken from the 'fhirContent'
*/
public class ImportFhirQuestionaireResponse {
  
  // Out-Argument of 'ImportFhirQuestionaire' (bool): returns true, if this questionare was not already exisiting before the import
  #[Required]
  public bool $wasNew;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'DeleteFhirQuestionaire'.
* Method: Deletes a FHIR Questionaire by its given
* 'questionaireIdentifyingUrl' and 'questionaireVersion'
*/
public class DeleteFhirQuestionaireRequest {
  
  // Required Argument for 'DeleteFhirQuestionaire' (string)
  #[Required]
  public string $questionaireIdentifyingUrl;
  
  // Required Argument for 'DeleteFhirQuestionaire' (string)
  #[Required]
  public string $questionaireVersion;
  
}

/*
* Contains results from calling 'DeleteFhirQuestionaire'.
* Method: Deletes a FHIR Questionaire by its given
* 'questionaireIdentifyingUrl' and 'questionaireVersion'
*/
public class DeleteFhirQuestionaireResponse {
  
  // Out-Argument of 'DeleteFhirQuestionaire' (bool)
  #[Required]
  public bool $wasDeleted;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'GetApiVersion'.
* Method: returns the version of the ORSCF specification which is implemented by this API,
* (this can be used for backward compatibility within inhomogeneous infrastructures)
*/
public class GetApiVersionRequest {
  
}

/*
* Contains results from calling 'GetApiVersion'.
* Method: returns the version of the ORSCF specification which is implemented by this API,
* (this can be used for backward compatibility within inhomogeneous infrastructures)
*/
public class GetApiVersionResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetApiVersion' (String)
  public string $return;
  
}

/*
* Contains arguments for calling 'GetCapabilities'.
* Method: returns a list of API-features (there are several 'services' for different use cases, described by ORSCF)
* supported by this implementation. The following values are possible:
* 'WorkflowConsume', 'WorkflowSubmission', 'FhirQuestionaireConsume', 'FhirQuestionaireSubmission'
*/
public class GetCapabilitiesRequest {
  
}

/*
* Contains results from calling 'GetCapabilities'.
* Method: returns a list of API-features (there are several 'services' for different use cases, described by ORSCF)
* supported by this implementation. The following values are possible:
* 'WorkflowConsume', 'WorkflowSubmission', 'FhirQuestionaireConsume', 'FhirQuestionaireSubmission'
*/
public class GetCapabilitiesResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetCapabilities' (String[])
  public array $return;
  
}

/*
* Contains arguments for calling 'GetPermittedAuthScopes'.
* Method: returns a list of available capabilities ("API:WorkflowConsume") and/or
* data-scopes ("Study:9B2C3F48-2941-2F8F-4D35-7D117D5C6F72")
* which are permitted for the CURRENT ACCESSOR and gives information about its 'authState', which can be:
* 0=auth needed /
* 1=authenticated /
* -1=auth expired /
* -2=auth invalid/disabled
*/
public class GetPermittedAuthScopesRequest {
  
}

/*
* Contains results from calling 'GetPermittedAuthScopes'.
* Method: returns a list of available capabilities ("API:WorkflowConsume") and/or
* data-scopes ("Study:9B2C3F48-2941-2F8F-4D35-7D117D5C6F72")
* which are permitted for the CURRENT ACCESSOR and gives information about its 'authState', which can be:
* 0=auth needed /
* 1=authenticated /
* -1=auth expired /
* -2=auth invalid/disabled
*/
public class GetPermittedAuthScopesResponse {
  
  // Out-Argument of 'GetPermittedAuthScopes' (int)
  #[Required]
  public int $authState;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetPermittedAuthScopes' (String[])
  public array $return;
  
}

/*
* Contains arguments for calling 'GetOAuthTokenRequestUrl'.
* Method: OPTIONAL: If the authentication on the current service is mapped
* using tokens and should provide information about the source at this point,
* the login URL to be called up via browser (OAuth <see href="https://openid.net/specs/openid-client-initiated-backchannel-authentication-core-1_0.html">'CIBA-Flow'</see>) is returned here.
*/
public class GetOAuthTokenRequestUrlRequest {
  
}

/*
* Contains results from calling 'GetOAuthTokenRequestUrl'.
* Method: OPTIONAL: If the authentication on the current service is mapped
* using tokens and should provide information about the source at this point,
* the login URL to be called up via browser (OAuth <see href="https://openid.net/specs/openid-client-initiated-backchannel-authentication-core-1_0.html">'CIBA-Flow'</see>) is returned here.
*/
public class GetOAuthTokenRequestUrlResponse {
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
  // Return-Value of 'GetOAuthTokenRequestUrl' (String)
  public string $return;
  
}

/*
* Contains arguments for calling 'SearchWorkflowDefinitions'.
* Method: Lists all ORSCF 'ResearchStudyDefinitions'
*/
public class SearchWorkflowDefinitionsRequest {
  
}

/*
* Contains results from calling 'SearchWorkflowDefinitions'.
* Method: Lists all ORSCF 'ResearchStudyDefinitions'
*/
public class SearchWorkflowDefinitionsResponse {
  
  // Out-Argument of 'SearchWorkflowDefinitions' (array)
  #[Required]
  public array $result;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ExportWorkflowDefinition'.
* Method: Exports a ORSCF 'ResearchStudyDefinition' by its given
* 'workflowDefinitionName' and 'workflowVersion'
*/
public class ExportWorkflowDefinitionRequest {
  
  // Required Argument for 'ExportWorkflowDefinition' (string)
  #[Required]
  public string $workflowDefinitionName;
  
  // Required Argument for 'ExportWorkflowDefinition' (string)
  #[Required]
  public string $workflowVersion;
  
}

/*
* Contains results from calling 'ExportWorkflowDefinition'.
* Method: Exports a ORSCF 'ResearchStudyDefinition' by its given
* 'workflowDefinitionName' and 'workflowVersion'
*/
public class ExportWorkflowDefinitionResponse {
  
  // Out-Argument of 'ExportWorkflowDefinition' (bool)
  #[Required]
  public bool $wasFound;
  
  // Out-Argument of 'ExportWorkflowDefinition' (ResearchStudyDefinition)
  #[Required]
  public ResearchStudyDefinition $result;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'ImportWorkflowDefinition'.
* Method: Imports a ORSCF 'ResearchStudyDefinition' into the Repository
* The 'workflowDefinitionName' and 'workflowVersion'
* will be taken from the definition itself
*/
public class ImportWorkflowDefinitionRequest {
  
  // Required Argument for 'ImportWorkflowDefinition' (ResearchStudyDefinition)
  #[Required]
  public ResearchStudyDefinition $workflowDefinition;
  
}

/*
* Contains results from calling 'ImportWorkflowDefinition'.
* Method: Imports a ORSCF 'ResearchStudyDefinition' into the Repository
* The 'workflowDefinitionName' and 'workflowVersion'
* will be taken from the definition itself
*/
public class ImportWorkflowDefinitionResponse {
  
  // Out-Argument of 'ImportWorkflowDefinition' (bool): returns true, if this questionare was not already exisiting before the import
  #[Required]
  public bool $wasNew;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}

/*
* Contains arguments for calling 'DeleteWorkflowDefinition'.
* Method: Deletes a ORSCF 'ResearchStudyDefinition' by its given
* 'workflowDefinitionName' and 'workflowVersion'
*/
public class DeleteWorkflowDefinitionRequest {
  
  // Required Argument for 'DeleteWorkflowDefinition' (string)
  #[Required]
  public string $workflowDefinitionName;
  
  // Required Argument for 'DeleteWorkflowDefinition' (string)
  #[Required]
  public string $workflowVersion;
  
}

/*
* Contains results from calling 'DeleteWorkflowDefinition'.
* Method: Deletes a ORSCF 'ResearchStudyDefinition' by its given
* 'workflowDefinitionName' and 'workflowVersion'
*/
public class DeleteWorkflowDefinitionResponse {
  
  // Out-Argument of 'DeleteWorkflowDefinition' (bool)
  #[Required]
  public bool $wasDeleted;
  
  // This field contains error text equivalent to an Exception message! (note that only 'fault' XOR 'return' can have a value != null)
  public string $fault = null;
  
}
