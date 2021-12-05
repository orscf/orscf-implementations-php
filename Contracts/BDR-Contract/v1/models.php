<?php
/* based on ORSCF BillingData Contract v1.6.0.11588 */

use \MedicalResearch\BillingData\Model;

namespace MedicalResearch\BillingData\StoreAccess {
  
  public class BillableTask {
    
    /*
    * a global unique id of a concrete study-task execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    public string $taskGuid;
    
    /*
    * a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    public string $visitGuid;
    
    /*
    * unique invariant name of ths task-procedure as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public string $taskName;
    
    /*
    * title of the task execution as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public string $taskExecutionTitle;
    
  }
  
  public class BillableVisit {
    
    /*
    * a global unique id of a concrete study-visit execution which is usually originated at the primary CRF or study management system ('SMS')
    */
    public string $visitGuid;
    
    /*
    * a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    */
    public string $studyExecutionIdentifier;
    
    /*
    * identity of the patient which can be a randomization or screening number (the exact semantic is defined per study) *this field has a max length of 50
    */
    public string $participantIdentifier;
    
    /*
    * unique invariant name of the visit-procedure as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public string $visitProdecureName;
    
    /*
    * title of the visit execution as defined in the 'StudyWorkflowDefinition' (originated from the sponsor)
    */
    public string $visitExecutionTitle;
    
    /*
    * *this field is optional
    */
    public ?string $billingDemandId;
    
    /*
    * *this field is optional
    */
    public ?string $invoiceId;
    
    /*
    * *this field is optional
    */
    public ?string $executionEndDateUtc;
    
    /*
    * indicates, that the visit is ready to get assigned to a 'BillingDemand' (usually this state is managed by the sponsor) This can only be set after there is a valid 'ExecutionEndDateUtc' *this field is optional
    */
    public ?string $sponsorValidationDateUtc;
    
    /*
    * indicates, that the visit is ready to get assigned to a 'Invoice' (usually this state is managed by the executor) This can only be set after either the 'SponsorValidationDateUtc' is set (and there is a Demand) nor the states are only managed by the executor, so that the demand-part is completely skipped. *this field is optional
    */
    public ?string $executorValidationDateUtc;
    
  }
  
  /*
  * created by the sponsor
  */
  public class BillingDemand {
    
    public string $id;
    
    public string $officialNumber;
    
    public string $studyExecutionIdentifier;
    
    /*
    * *this field is optional
    */
    public ?string $transmissionDateUtc;
    
    public string $creationDateUtc;
    
    public string $createdByPerson;
    
  }
  
  /*
  * created by the executor-company
  */
  public class Invoice {
    
    public string $id;
    
    /*
    * the invoice number
    */
    public string $officialNumber;
    
    public string $studyExecutionIdentifier;
    
    public string $offcialInvoiceDate;
    
    /*
    * *this field is optional
    */
    public ?string $transmissionDateUtc;
    
    public string $creationDateUtc;
    
    public string $createdByPerson;
    
    /*
    * *this field is optional
    */
    public ?string $paymentSubmittedDateUtc;
    
    /*
    * *this field is optional
    */
    public ?string $paymentReceivedDateUtc;
    
  }
  
  public class StudyExecutionScope {
    
    /*
    * a global unique id of a concrete study execution (dedicated to a concrete institute) which is usually originated at the primary CRF or study management system ('SMS')
    */
    public string $studyExecutionIdentifier;
    
    /*
    * the institute which is executing the study (this should be an invariant technical representation of the company name or a guid)
    */
    public string $executingInstituteIdentifier;
    
    /*
    * the official invariant name of the study as given by the sponsor *this field has a max length of 100
    */
    public string $studyWorkflowName;
    
    /*
    * version of the workflow *this field has a max length of 20
    */
    public string $studyWorkflowVersion;
    
    /*
    * optional structure (in JSON-format) containing additional metadata regarding this record, which can be used by 'StudyExecutionSystems' to extend the schema *this field is optional (use null as value)
    */
    public string $extendedMetaData;
    
  }
  
}
