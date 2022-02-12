<?php
/* based on ORSCF StudyWorkflowDefinition Contract v1.8.0.11747 */

include 'models.php';

public interface IWdrApiInfoService {
  
  /*
  * returns the version of the ORSCF specification which is implemented by this API, (this can be used for backward compatibility within inhomogeneous infrastructures)
  */
  function GetApiVersion(): string;
  
  /*
  * returns a list of API-features (there are several 'services' for different use cases, described by ORSCF) supported by this implementation. The following values are possible: 'WorkflowConsume', 'WorkflowDefinition',
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
  * GetWorkflowDefintion
  *
  * @param $workflowDefinitionName
  * @param $workflowVersion
  */
  function GetWorkflowDefintion(string $workflowDefinitionName, string $workflowVersion): ResearchStudyDefinition;
  
}

public interface IWorkflowDefinitionService {
  
}
