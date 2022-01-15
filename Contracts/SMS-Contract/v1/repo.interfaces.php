<?php
/* based on ORSCF StudyManagement Contract v1.7.0.0 */

use \MedicalResearch\StudyManagement\Model;

namespace MedicalResearch\StudyManagement\StoreAccess {
  
  public interface IInstitutes {
    
    /*
    * Loads a specific Institute addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $instituteUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    function GetInstituteByInstituteUid(string $instituteUid): GetInstituteByInstituteUidResponse;
    
    /*
    * Loads Institutes.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of Institutes which should be returned
    */
    function GetInstitutes(int $page, int $pageSize): GetInstitutesResponse;
    
    /*
    * Loads Institutes where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of Institutes which should be returned
    */
    function SearchInstitutes(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchInstitutesResponse;
    
    /*
    * Adds a new Institute and returns its primary identifier (or null on failure).
    *
    * @param $institute Institute containing the new values
    */
    function AddNewInstitute(Institute $institute): AddNewInstituteResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given Institute addressed by the primary identifier fields within the given Institute. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $institute Institute containing the new values (the primary identifier fields within the given Institute will be used to address the target record)
    */
    function UpdateInstitute(Institute $institute): UpdateInstituteResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given Institute addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $instituteUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    * @param $institute Institute containing the new values (the primary identifier fields within the given Institute will be ignored)
    */
    function UpdateInstituteByInstituteUid(string $instituteUid, Institute $institute): UpdateInstituteByInstituteUidResponse;
    
    /*
    * Deletes a specific Institute addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $instituteUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    function DeleteInstituteByInstituteUid(string $instituteUid): DeleteInstituteByInstituteUidResponse;
    
  }
  
  public interface IResearchStudies {
    
    /*
    * Loads a specific ResearchStudy addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $researchStudyUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    function GetResearchStudyByResearchStudyUid(string $researchStudyUid): GetResearchStudyByResearchStudyUidResponse;
    
    /*
    * Loads ResearchStudies.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of ResearchStudies which should be returned
    */
    function GetResearchStudies(int $page, int $pageSize): GetResearchStudiesResponse;
    
    /*
    * Loads ResearchStudies where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of ResearchStudies which should be returned
    */
    function SearchResearchStudies(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchResearchStudiesResponse;
    
    /*
    * Adds a new ResearchStudy and returns its primary identifier (or null on failure).
    *
    * @param $researchStudy ResearchStudy containing the new values
    */
    function AddNewResearchStudy(ResearchStudy $researchStudy): AddNewResearchStudyResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given ResearchStudy addressed by the primary identifier fields within the given ResearchStudy. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $researchStudy ResearchStudy containing the new values (the primary identifier fields within the given ResearchStudy will be used to address the target record)
    */
    function UpdateResearchStudy(ResearchStudy $researchStudy): UpdateResearchStudyResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given ResearchStudy addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $researchStudyUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    * @param $researchStudy ResearchStudy containing the new values (the primary identifier fields within the given ResearchStudy will be ignored)
    */
    function UpdateResearchStudyByResearchStudyUid(string $researchStudyUid, ResearchStudy $researchStudy): UpdateResearchStudyByResearchStudyUidResponse;
    
    /*
    * Deletes a specific ResearchStudy addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $researchStudyUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    function DeleteResearchStudyByResearchStudyUid(string $researchStudyUid): DeleteResearchStudyByResearchStudyUidResponse;
    
  }
  
  public interface ISites {
    
    /*
    * Loads a specific Site addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $siteUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    function GetSiteBySiteUid(string $siteUid): GetSiteBySiteUidResponse;
    
    /*
    * Loads Sites.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of Sites which should be returned
    */
    function GetSites(int $page, int $pageSize): GetSitesResponse;
    
    /*
    * Loads Sites where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of Sites which should be returned
    */
    function SearchSites(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchSitesResponse;
    
    /*
    * Adds a new Site and returns its primary identifier (or null on failure).
    *
    * @param $site Site containing the new values
    */
    function AddNewSite(Site $site): AddNewSiteResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given Site addressed by the primary identifier fields within the given Site. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $site Site containing the new values (the primary identifier fields within the given Site will be used to address the target record)
    */
    function UpdateSite(Site $site): UpdateSiteResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given Site addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $siteUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    * @param $site Site containing the new values (the primary identifier fields within the given Site will be ignored)
    */
    function UpdateSiteBySiteUid(string $siteUid, Site $site): UpdateSiteBySiteUidResponse;
    
    /*
    * Deletes a specific Site addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $siteUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    function DeleteSiteBySiteUid(string $siteUid): DeleteSiteBySiteUidResponse;
    
  }
  
  public interface ISystemEndpoints {
    
    /*
    * Loads a specific SystemEndpoint addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $systemEndpointUid Represents the primary identity of a SystemEndpoint
    */
    function GetSystemEndpointBySystemEndpointUid(string $systemEndpointUid): GetSystemEndpointBySystemEndpointUidResponse;
    
    /*
    * Loads SystemEndpoints.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of SystemEndpoints which should be returned
    */
    function GetSystemEndpoints(int $page, int $pageSize): GetSystemEndpointsResponse;
    
    /*
    * Loads SystemEndpoints where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of SystemEndpoints which should be returned
    */
    function SearchSystemEndpoints(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchSystemEndpointsResponse;
    
    /*
    * Adds a new SystemEndpoint and returns its primary identifier (or null on failure).
    *
    * @param $systemEndpoint SystemEndpoint containing the new values
    */
    function AddNewSystemEndpoint(SystemEndpoint $systemEndpoint): AddNewSystemEndpointResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given SystemEndpoint addressed by the primary identifier fields within the given SystemEndpoint. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $systemEndpoint SystemEndpoint containing the new values (the primary identifier fields within the given SystemEndpoint will be used to address the target record)
    */
    function UpdateSystemEndpoint(SystemEndpoint $systemEndpoint): UpdateSystemEndpointResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given SystemEndpoint addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $systemEndpointUid Represents the primary identity of a SystemEndpoint
    * @param $systemEndpoint SystemEndpoint containing the new values (the primary identifier fields within the given SystemEndpoint will be ignored)
    */
    function UpdateSystemEndpointBySystemEndpointUid(string $systemEndpointUid, SystemEndpoint $systemEndpoint): UpdateSystemEndpointBySystemEndpointUidResponse;
    
    /*
    * Deletes a specific SystemEndpoint addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $systemEndpointUid Represents the primary identity of a SystemEndpoint
    */
    function DeleteSystemEndpointBySystemEndpointUid(string $systemEndpointUid): DeleteSystemEndpointBySystemEndpointUidResponse;
    
  }
  
  public interface IInstituteRelatedSystemAssignments {
    
    /*
    * Loads a specific InstituteRelatedSystemAssignment addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $instituteRelatedSystemAssignemntUid Represents the primary identity of a InstituteRelatedSystemAssignment
    */
    function GetInstituteRelatedSystemAssignmentByInstituteRelatedSystemAssignemntUid(string $instituteRelatedSystemAssignemntUid): GetInstituteRelatedSystemAssignmentByInstituteRelatedSystemAssignemntUidResponse;
    
    /*
    * Loads InstituteRelatedSystemAssignments.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of InstituteRelatedSystemAssignments which should be returned
    */
    function GetInstituteRelatedSystemAssignments(int $page, int $pageSize): GetInstituteRelatedSystemAssignmentsResponse;
    
    /*
    * Loads InstituteRelatedSystemAssignments where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of InstituteRelatedSystemAssignments which should be returned
    */
    function SearchInstituteRelatedSystemAssignments(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchInstituteRelatedSystemAssignmentsResponse;
    
    /*
    * Adds a new InstituteRelatedSystemAssignment and returns its primary identifier (or null on failure).
    *
    * @param $instituteRelatedSystemAssignment InstituteRelatedSystemAssignment containing the new values
    */
    function AddNewInstituteRelatedSystemAssignment(InstituteRelatedSystemAssignment $instituteRelatedSystemAssignment): AddNewInstituteRelatedSystemAssignmentResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given InstituteRelatedSystemAssignment addressed by the primary identifier fields within the given InstituteRelatedSystemAssignment. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $instituteRelatedSystemAssignment InstituteRelatedSystemAssignment containing the new values (the primary identifier fields within the given InstituteRelatedSystemAssignment will be used to address the target record)
    */
    function UpdateInstituteRelatedSystemAssignment(InstituteRelatedSystemAssignment $instituteRelatedSystemAssignment): UpdateInstituteRelatedSystemAssignmentResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given InstituteRelatedSystemAssignment addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $instituteRelatedSystemAssignemntUid Represents the primary identity of a InstituteRelatedSystemAssignment
    * @param $instituteRelatedSystemAssignment InstituteRelatedSystemAssignment containing the new values (the primary identifier fields within the given InstituteRelatedSystemAssignment will be ignored)
    */
    function UpdateInstituteRelatedSystemAssignmentByInstituteRelatedSystemAssignemntUid(string $instituteRelatedSystemAssignemntUid, InstituteRelatedSystemAssignment $instituteRelatedSystemAssignment): UpdateInstituteRelatedSystemAssignmentByInstituteRelatedSystemAssignemntUidResponse;
    
    /*
    * Deletes a specific InstituteRelatedSystemAssignment addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $instituteRelatedSystemAssignemntUid Represents the primary identity of a InstituteRelatedSystemAssignment
    */
    function DeleteInstituteRelatedSystemAssignmentByInstituteRelatedSystemAssignemntUid(string $instituteRelatedSystemAssignemntUid): DeleteInstituteRelatedSystemAssignmentByInstituteRelatedSystemAssignemntUidResponse;
    
  }
  
  public interface ISystemConnections {
    
    /*
    * Loads a specific SystemConnection addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $systemConnectionUid Represents the primary identity of a SystemConnection
    */
    function GetSystemConnectionBySystemConnectionUid(string $systemConnectionUid): GetSystemConnectionBySystemConnectionUidResponse;
    
    /*
    * Loads SystemConnections.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of SystemConnections which should be returned
    */
    function GetSystemConnections(int $page, int $pageSize): GetSystemConnectionsResponse;
    
    /*
    * Loads SystemConnections where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of SystemConnections which should be returned
    */
    function SearchSystemConnections(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchSystemConnectionsResponse;
    
    /*
    * Adds a new SystemConnection and returns its primary identifier (or null on failure).
    *
    * @param $systemConnection SystemConnection containing the new values
    */
    function AddNewSystemConnection(SystemConnection $systemConnection): AddNewSystemConnectionResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given SystemConnection addressed by the primary identifier fields within the given SystemConnection. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $systemConnection SystemConnection containing the new values (the primary identifier fields within the given SystemConnection will be used to address the target record)
    */
    function UpdateSystemConnection(SystemConnection $systemConnection): UpdateSystemConnectionResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given SystemConnection addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $systemConnectionUid Represents the primary identity of a SystemConnection
    * @param $systemConnection SystemConnection containing the new values (the primary identifier fields within the given SystemConnection will be ignored)
    */
    function UpdateSystemConnectionBySystemConnectionUid(string $systemConnectionUid, SystemConnection $systemConnection): UpdateSystemConnectionBySystemConnectionUidResponse;
    
    /*
    * Deletes a specific SystemConnection addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $systemConnectionUid Represents the primary identity of a SystemConnection
    */
    function DeleteSystemConnectionBySystemConnectionUid(string $systemConnectionUid): DeleteSystemConnectionBySystemConnectionUidResponse;
    
  }
  
  public interface IInvolvedPersons {
    
    /*
    * Loads a specific InvolvedPerson addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $involvedPersonUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    function GetInvolvedPersonByInvolvedPersonUid(string $involvedPersonUid): GetInvolvedPersonByInvolvedPersonUidResponse;
    
    /*
    * Loads InvolvedPersons.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of InvolvedPersons which should be returned
    */
    function GetInvolvedPersons(int $page, int $pageSize): GetInvolvedPersonsResponse;
    
    /*
    * Loads InvolvedPersons where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of InvolvedPersons which should be returned
    */
    function SearchInvolvedPersons(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchInvolvedPersonsResponse;
    
    /*
    * Adds a new InvolvedPerson and returns its primary identifier (or null on failure).
    *
    * @param $involvedPerson InvolvedPerson containing the new values
    */
    function AddNewInvolvedPerson(InvolvedPerson $involvedPerson): AddNewInvolvedPersonResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given InvolvedPerson addressed by the primary identifier fields within the given InvolvedPerson. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $involvedPerson InvolvedPerson containing the new values (the primary identifier fields within the given InvolvedPerson will be used to address the target record)
    */
    function UpdateInvolvedPerson(InvolvedPerson $involvedPerson): UpdateInvolvedPersonResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given InvolvedPerson addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $involvedPersonUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    * @param $involvedPerson InvolvedPerson containing the new values (the primary identifier fields within the given InvolvedPerson will be ignored)
    */
    function UpdateInvolvedPersonByInvolvedPersonUid(string $involvedPersonUid, InvolvedPerson $involvedPerson): UpdateInvolvedPersonByInvolvedPersonUidResponse;
    
    /*
    * Deletes a specific InvolvedPerson addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $involvedPersonUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    function DeleteInvolvedPersonByInvolvedPersonUid(string $involvedPersonUid): DeleteInvolvedPersonByInvolvedPersonUidResponse;
    
  }
  
  public interface IInvolvementRoles {
    
    /*
    * Loads a specific InvolvementRole addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $involvedPersonRoleUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    function GetInvolvementRoleByInvolvedPersonRoleUid(string $involvedPersonRoleUid): GetInvolvementRoleByInvolvedPersonRoleUidResponse;
    
    /*
    * Loads InvolvementRoles.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of InvolvementRoles which should be returned
    */
    function GetInvolvementRoles(int $page, int $pageSize): GetInvolvementRolesResponse;
    
    /*
    * Loads InvolvementRoles where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of InvolvementRoles which should be returned
    */
    function SearchInvolvementRoles(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchInvolvementRolesResponse;
    
    /*
    * Adds a new InvolvementRole and returns its primary identifier (or null on failure).
    *
    * @param $involvementRole InvolvementRole containing the new values
    */
    function AddNewInvolvementRole(InvolvementRole $involvementRole): AddNewInvolvementRoleResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given InvolvementRole addressed by the primary identifier fields within the given InvolvementRole. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $involvementRole InvolvementRole containing the new values (the primary identifier fields within the given InvolvementRole will be used to address the target record)
    */
    function UpdateInvolvementRole(InvolvementRole $involvementRole): UpdateInvolvementRoleResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given InvolvementRole addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $involvedPersonRoleUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    * @param $involvementRole InvolvementRole containing the new values (the primary identifier fields within the given InvolvementRole will be ignored)
    */
    function UpdateInvolvementRoleByInvolvedPersonRoleUid(string $involvedPersonRoleUid, InvolvementRole $involvementRole): UpdateInvolvementRoleByInvolvedPersonRoleUidResponse;
    
    /*
    * Deletes a specific InvolvementRole addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $involvedPersonRoleUid An <see href="https://de.wikipedia.org/wiki/Universally_Unique_Identifier">Universally Unique Identifier</see> which can be generated by any origin system and is used to address this ORSCF conform data record in decentralized environments. Note that this Identity must not be changed any more!
    */
    function DeleteInvolvementRoleByInvolvedPersonRoleUid(string $involvedPersonRoleUid): DeleteInvolvementRoleByInvolvedPersonRoleUidResponse;
    
  }
  
  public interface IStudyRelatedSystemAssignments {
    
    /*
    * Loads a specific StudyRelatedSystemAssignment addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $studyRelatedSystemAssignmentUid Represents the primary identity of a StudyRelatedSystemAssignment
    */
    function GetStudyRelatedSystemAssignmentByStudyRelatedSystemAssignmentUid(string $studyRelatedSystemAssignmentUid): GetStudyRelatedSystemAssignmentByStudyRelatedSystemAssignmentUidResponse;
    
    /*
    * Loads StudyRelatedSystemAssignments.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of StudyRelatedSystemAssignments which should be returned
    */
    function GetStudyRelatedSystemAssignments(int $page, int $pageSize): GetStudyRelatedSystemAssignmentsResponse;
    
    /*
    * Loads StudyRelatedSystemAssignments where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of StudyRelatedSystemAssignments which should be returned
    */
    function SearchStudyRelatedSystemAssignments(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchStudyRelatedSystemAssignmentsResponse;
    
    /*
    * Adds a new StudyRelatedSystemAssignment and returns its primary identifier (or null on failure).
    *
    * @param $studyRelatedSystemAssignment StudyRelatedSystemAssignment containing the new values
    */
    function AddNewStudyRelatedSystemAssignment(StudyRelatedSystemAssignment $studyRelatedSystemAssignment): AddNewStudyRelatedSystemAssignmentResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given StudyRelatedSystemAssignment addressed by the primary identifier fields within the given StudyRelatedSystemAssignment. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyRelatedSystemAssignment StudyRelatedSystemAssignment containing the new values (the primary identifier fields within the given StudyRelatedSystemAssignment will be used to address the target record)
    */
    function UpdateStudyRelatedSystemAssignment(StudyRelatedSystemAssignment $studyRelatedSystemAssignment): UpdateStudyRelatedSystemAssignmentResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given StudyRelatedSystemAssignment addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyRelatedSystemAssignmentUid Represents the primary identity of a StudyRelatedSystemAssignment
    * @param $studyRelatedSystemAssignment StudyRelatedSystemAssignment containing the new values (the primary identifier fields within the given StudyRelatedSystemAssignment will be ignored)
    */
    function UpdateStudyRelatedSystemAssignmentByStudyRelatedSystemAssignmentUid(string $studyRelatedSystemAssignmentUid, StudyRelatedSystemAssignment $studyRelatedSystemAssignment): UpdateStudyRelatedSystemAssignmentByStudyRelatedSystemAssignmentUidResponse;
    
    /*
    * Deletes a specific StudyRelatedSystemAssignment addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $studyRelatedSystemAssignmentUid Represents the primary identity of a StudyRelatedSystemAssignment
    */
    function DeleteStudyRelatedSystemAssignmentByStudyRelatedSystemAssignmentUid(string $studyRelatedSystemAssignmentUid): DeleteStudyRelatedSystemAssignmentByStudyRelatedSystemAssignmentUidResponse;
    
  }
  
  public interface ISiteRelatedSystemAssignments {
    
    /*
    * Loads a specific SiteRelatedSystemAssignment addressed by the given primary identifier. Returns null on failure, or if no record exists with the given identity.
    *
    * @param $siteRelatedSystemAssignmentUid Represents the primary identity of a SiteRelatedSystemAssignment
    */
    function GetSiteRelatedSystemAssignmentBySiteRelatedSystemAssignmentUid(string $siteRelatedSystemAssignmentUid): GetSiteRelatedSystemAssignmentBySiteRelatedSystemAssignmentUidResponse;
    
    /*
    * Loads SiteRelatedSystemAssignments.
    *
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of SiteRelatedSystemAssignments which should be returned
    */
    function GetSiteRelatedSystemAssignments(int $page, int $pageSize): GetSiteRelatedSystemAssignmentsResponse;
    
    /*
    * Loads SiteRelatedSystemAssignments where values matching to the given filterExpression
    *
    * @param $filterExpression a filter expression like '((FieldName1 == "ABC" &amp;&amp; FieldName2 &gt; 12) || FieldName2 != "")'
    * @param $sortingExpression one or more property names which are used as sort order (before pagination)
    * @param $page Number of the page, which should be returned
    * @param $pageSize Max count of SiteRelatedSystemAssignments which should be returned
    */
    function SearchSiteRelatedSystemAssignments(string $filterExpression, string $sortingExpression, int $page, int $pageSize): SearchSiteRelatedSystemAssignmentsResponse;
    
    /*
    * Adds a new SiteRelatedSystemAssignment and returns its primary identifier (or null on failure).
    *
    * @param $siteRelatedSystemAssignment SiteRelatedSystemAssignment containing the new values
    */
    function AddNewSiteRelatedSystemAssignment(SiteRelatedSystemAssignment $siteRelatedSystemAssignment): AddNewSiteRelatedSystemAssignmentResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given SiteRelatedSystemAssignment addressed by the primary identifier fields within the given SiteRelatedSystemAssignment. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $siteRelatedSystemAssignment SiteRelatedSystemAssignment containing the new values (the primary identifier fields within the given SiteRelatedSystemAssignment will be used to address the target record)
    */
    function UpdateSiteRelatedSystemAssignment(SiteRelatedSystemAssignment $siteRelatedSystemAssignment): UpdateSiteRelatedSystemAssignmentResponse;
    
    /*
    * Updates all values (which are not "FixedAfterCreation") of the given SiteRelatedSystemAssignment addressed by the supplementary given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $siteRelatedSystemAssignmentUid Represents the primary identity of a SiteRelatedSystemAssignment
    * @param $siteRelatedSystemAssignment SiteRelatedSystemAssignment containing the new values (the primary identifier fields within the given SiteRelatedSystemAssignment will be ignored)
    */
    function UpdateSiteRelatedSystemAssignmentBySiteRelatedSystemAssignmentUid(string $siteRelatedSystemAssignmentUid, SiteRelatedSystemAssignment $siteRelatedSystemAssignment): UpdateSiteRelatedSystemAssignmentBySiteRelatedSystemAssignmentUidResponse;
    
    /*
    * Deletes a specific SiteRelatedSystemAssignment addressed by the given primary identifier. Returns false on failure or if no target record was found, otherwise true.
    *
    * @param $siteRelatedSystemAssignmentUid Represents the primary identity of a SiteRelatedSystemAssignment
    */
    function DeleteSiteRelatedSystemAssignmentBySiteRelatedSystemAssignmentUid(string $siteRelatedSystemAssignmentUid): DeleteSiteRelatedSystemAssignmentBySiteRelatedSystemAssignmentUidResponse;
    
  }
  
}
