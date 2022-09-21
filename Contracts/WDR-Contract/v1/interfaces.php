<?php
/* based on ORSCF StudyWorkflowDefinition Contract v1.9.0.11838 */

include 'models.php';

public interface IFhirQuestionaireConsumeService {
  
  /*
  * Lists all FHIR Questionaires
  *
  * @param $result
  */
  function SearchFhirQuestionaires(array &$result);
  
  /*
  * Exports a FHIR Questionaire by its given 'questionaireIdentifyingUrl' and 'questionaireVersion'
  *
  * @param $questionaireIdentifyingUrl
  * @param $questionaireVersion
  * @param $wasFound
  * @param $fhirContent
  */
  function ExportFhirQuestionaire(string $questionaireIdentifyingUrl, string $questionaireVersion, bool &$wasFound, string &$fhirContent);
  
}

public interface IFhirQuestionaireSubmissionService {
  
  /*
  * Imports a FHIR Questionaire into the Repository The 'questionaireIdentifyingUrl' and 'questionaireVersion' will be taken from the 'fhirContent'
  *
  * @param $fhirContent
  * @param $wasNew returns true, if this questionare was not already exisiting before the import
  */
  function ImportFhirQuestionaire(string $fhirContent, bool &$wasNew);
  
  /*
  * Deletes a FHIR Questionaire by its given 'questionaireIdentifyingUrl' and 'questionaireVersion'
  *
  * @param $questionaireIdentifyingUrl
  * @param $questionaireVersion
  * @param $wasDeleted
  */
  function DeleteFhirQuestionaire(string $questionaireIdentifyingUrl, string $questionaireVersion, bool &$wasDeleted);
  
}

public interface IWdrApiInfoService {
  
  /*
  * returns the version of the ORSCF specification which is implemented by this API, (this can be used for backward compatibility within inhomogeneous infrastructures)
  */
  function GetApiVersion(): string;
  
  /*
  * returns a list of API-features (there are several 'services' for different use cases, described by ORSCF) supported by this implementation. The following values are possible: 'WorkflowConsume', 'WorkflowSubmission', 'FhirQuestionaireConsume', 'FhirQuestionaireSubmission'
  */
  function GetCapabilities(): array;
  
  /*
  * returns a list of available capabilities ("API:WorkflowConsume") and/or data-scopes ("Study:9B2C3F48-2941-2F8F-4D35-7D117D5C6F72") which are permitted for the CURRENT ACCESSOR and gives information about its 'authState', which can be: 0=auth needed / 1=authenticated / -1=auth expired / -2=auth invalid/disabled
  *
  * @param $authState
  */
  function GetPermittedAuthScopes(int &$authState): array;
  
  /*
  * OPTIONAL: If the authentication on the current service is mapped using tokens and should provide information about the source at this point, the login URL to be called up via browser (OAuth <see href="https://openid.net/specs/openid-client-initiated-backchannel-authentication-core-1_0.html">'CIBA-Flow'</see>) is returned here.
  */
  function GetOAuthTokenRequestUrl(): string;
  
}

public interface IWorkflowConsumeService {
  
  /*
  * Lists all ORSCF 'ResearchStudyDefinitions'
  *
  * @param $result
  */
  function SearchWorkflowDefinitions(array &$result);
  
  /*
  * Exports a ORSCF 'ResearchStudyDefinition' by its given 'workflowDefinitionName' and 'workflowVersion'
  *
  * @param $workflowDefinitionName
  * @param $workflowVersion
  * @param $wasFound
  * @param $result
  */
  function ExportWorkflowDefinition(string $workflowDefinitionName, string $workflowVersion, bool &$wasFound, ResearchStudyDefinition &$result);
  
}

public interface IWorkflowSubmissionService {
  
  /*
  * Imports a ORSCF 'ResearchStudyDefinition' into the Repository The 'workflowDefinitionName' and 'workflowVersion' will be taken from the definition itself
  *
  * @param $workflowDefinition
  * @param $wasNew returns true, if this questionare was not already exisiting before the import
  */
  function ImportWorkflowDefinition(ResearchStudyDefinition $workflowDefinition, bool &$wasNew);
  
  /*
  * Deletes a ORSCF 'ResearchStudyDefinition' by its given 'workflowDefinitionName' and 'workflowVersion'
  *
  * @param $workflowDefinitionName
  * @param $workflowVersion
  * @param $wasDeleted
  */
  function DeleteWorkflowDefinition(string $workflowDefinitionName, string $workflowVersion, bool &$wasDeleted);
  
}
