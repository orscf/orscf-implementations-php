<?php
/* based on ORSCF VisitData Contract v1.7.0.0 */

include 'models.php';

public interface IVdrApiInfoService {
  
  /*
  * returns the version of the ORSCF specification which is implemented by this API, (this can be used for backward compatibility within inhomogeneous infrastructures)
  */
  function GetApiVersion(): string;
  
  /*
  * returns a list of API-features (there are several 'services' for different use cases, described by ORSCF) supported by this implementation. The following values are possible: 'VisitOverview', 'VisitScheduling', 'VisitDataConsume', 'VisitDataSubmission'
  */
  function GetCapabilities(): array;
  
  /*
  * returns a list of available capabilities ("API:VisitDataConsume") and/or data-scopes ("Study:9B2C3F48-2941-2F8F-4D35-7D117D5C6F72") which are permitted for the CURRENT ACCESSOR and gives information about its 'authState', which can be: 0=auth needed / 1=authenticated / -1=auth expired / -2=auth invalid/disabled
  *
  * @param $authState
  */
  function GetPermittedAuthScopes(int &$authState): array;
  
  /*
  * OPTIONAL: If the authentication on the current service is mapped using tokens and should provide information about the source at this point, the login URL to be called up via browser (OAuth <see href="https://openid.net/specs/openid-client-initiated-backchannel-authentication-core-1_0.html">'CIBA-Flow'</see>) is returned here.
  */
  function GetOAuthTokenRequestUrl(): string;
  
}

public interface IVisitDataConsumeService {
  
}

public interface IVisitDataSubmissionService {
  
}

public interface IVisitOverviewService {
  
}

public interface IVisitSchedulingService {
  
}
