<?php
/* based on ORSCF StudyWorkflowDefinition Contract v1.7.0.0 */


public class Arm {
  
  /*
  * Name of the Arm - INVARIANT! because it is used to generate Identifers for induced executions! *this field has a max length of 50
  */
  public string $studyArmName;
  
  /*
  * *this field has a max length of 100
  */
  public string $studyWorkflowName;
  
  /*
  * *this field has a max length of 20
  */
  public string $studyWorkflowVersion;
  
  /*
  * the ProcedureSchedule which is representing the primary-/entry-workflow (estimated visits) for participants of this arm *this field is optional
  */
  public ?string $rootProcedureScheduleId;
  
  /*
  * *this field is optional
  */
  public ?float $billablePriceOnFailedInclusion;
  
  /*
  * *this field is optional
  */
  public ?float $billablePriceOnSuccessfullInclusion;
  
  /*
  * *this field is optional
  */
  public ?float $billablePriceOnAbortedParticipation;
  
  /*
  * *this field is optional
  */
  public ?float $billablePriceOnCompletedParticipation;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $armSpecificDocumentationUrl;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $inclusionCriteria;
  
  /*
  * comma sparated list of Sub-Study names which are allowed to be executed for this arm *this field is optional (use null as value)
  */
  public string $allowedSubstudies;
  
}

public class DataRecordingTaskDefinition {
  
  /*
  * Name of the Definition - INVARIANT! because it is used to generate Identifers for induced executions! *this field has a max length of 50
  */
  public string $taskDefinitionName;
  
  /*
  * *this field has a max length of 100
  */
  public string $studyWorkflowName;
  
  /*
  * *this field has a max length of 20
  */
  public string $studyWorkflowVersion;
  
  /*
  * *this field is optional
  */
  public ?float $billablePriceOnCompletedExecution;
  
  public string $shortDescription;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $taskSpecificDocumentationUrl;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $importantNotices;
  
  /*
  * schema-url of the data which have to be recorded
  */
  public string $dataSchemaUrl;
  
  /*
  * RAW data, in the schema as defined at the 'DataSchemaUrl' *this field is optional (use null as value)
  */
  public string $defaultData;
  
}

public class DrugApplymentTaskDefinition {
  
  /*
  * Name of the Definition - INVARIANT! because it is used to generate Identifers for induced executions! *this field has a max length of 50
  */
  public string $taskDefinitionName;
  
  /*
  * *this field has a max length of 100
  */
  public string $studyWorkflowName;
  
  /*
  * *this field has a max length of 20
  */
  public string $studyWorkflowVersion;
  
  /*
  * *this field is optional
  */
  public ?float $billablePriceOnCompletedExecution;
  
  public string $shortDescription;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $taskSpecificDocumentationUrl;
  
  public string $drugName;
  
  public float $drugDoseMgPerUnitMg;
  
  public float $unitsToApply;
  
  public string $applymentRoute;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $importantNotices;
  
}

public class InducedDataRecordingTask {
  
  public string $id;
  
  public string $taskScheduleId;
  
  /*
  * *this field has a max length of 50
  */
  public string $taskDefinitionName;
  
  /*
  * estimated scheduling time relative to the scheduling date of the parent TaskSchedule
  */
  public int $schedulingOffset;
  
  /*
  * 'h'=Hours / 'm'=Minutes / 's'=Seconds
  */
  public string $schedulingOffsetUnit;
  
  /*
  * defines an additional variability RELATIVE to the estimated scheduling time (which is calculated from the offset), in this case the EARLIEST possible time.
  */
  public string $schedulingVariabilityBefore;
  
  /*
  * defines an additional variability RELATIVE to the estimated scheduling time (which is calculated from the offset), in this case the LATEST possible time.
  */
  public string $schedulingVariabilityAfter;
  
  /*
  * 'h'=Hours / 'm'=Minutes / 's'=Seconds
  */
  public string $schedulingVariabilityUnit;
  
  /*
  * the name for the induced execution, like 'Measurement X', which is usually defined by the study protocol. if multiple inducements are possible (for example when using cycles), the title should to contain a placeholder (example: '{vt} - Measurement X') to prevent from duplicate execution names.
  */
  public string $uniqueExecutionName;
  
  /*
  * defines, if the study protocol tolerates this execution to be 'skipped' (if not, a missed execution is treated as 'lost' and can cause the exclusion of the participant)
  */
  public bool $skipable;
  
  public string $eventOnSkip;
  
  public string $eventOnLost;
  
  /*
  * The Position (1..x) of this inducement within the parent schedule. This value is relevant for addressing predecessors as fixpoint for the offest-calculation. Within one schedule there can only be one inducement for each position! The 0 is reserved for addressing the parent schedule itself and must not be used as well as negative values!
  */
  public int $position;
  
  /*
  * 0=InducementOfScheduleOrCycle: when the start of the parent Schedule (for the current cycle) was induced / -1=InducementOfPredessessor: when the direct predecessor task or subschedule (based on the 'Position') within the current schedule was induced / 1..x: when the predecessor at the Position within the current schedule, ADRESSED by the given value, was induced *items of sub-schedules are not relevant - when addressing a sub-schedule as predecessor, then only its entry will be used *this behaviour can be concretized via 'SchedulingByEstimate'
  */
  public int $schedulingOffsetFixpoint;
  
  /*
  * If set to true, the offset calculation will be based on the ESTIMATED completion of the predecessor (see 'Fixpoint'). Otherwise, when set to false, the offset calculation will be based on the REAL completion (if recorded execution data is available during calculation) of the predecessor. *this will not evaluated, when the 'Fixpoint' is set to 0!
  */
  public bool $schedulingByEstimate;
  
  /*
  * The name of a Sub-Study for which this Task should be induced or empty when its part of the current Arms regular workflow *this field is optional (use null as value)
  */
  public string $dedicatedToSubstudy;
  
  /*
  * Number, which can be used via Placeholder {#} within the UniqueExecutionName and which will automatically increase when using cycles or sub-schedules
  */
  public int $taskNumber;
  
}

public class InducedDrugApplymentTask {
  
  public string $id;
  
  public string $taskScheduleId;
  
  /*
  * *this field has a max length of 50
  */
  public string $taskDefinitionName;
  
  /*
  * estimated scheduling time relative to the scheduling date of the parent TaskSchedule
  */
  public int $schedulingOffset;
  
  /*
  * 'h'=Hours / 'm'=Minutes / 's'=Seconds
  */
  public string $schedulingOffsetUnit;
  
  /*
  * defines an additional variability RELATIVE to the estimated scheduling time (which is calculated from the offset), in this case the EARLIEST possible time.
  */
  public int $schedulingVariabilityBefore;
  
  /*
  * defines an additional variability RELATIVE to the estimated scheduling time (which is calculated from the offset), in this case the LATEST possible time.
  */
  public int $schedulingVariabilityAfter;
  
  /*
  * 'h'=Hours / 'm'=Minutes / 's'=Seconds
  */
  public string $schedulingVariabilityUnit;
  
  /*
  * the name for the induced execution, like 'Measurement X', which is usually defined by the study protocol. if multiple inducements are possible (for example when using cycles), the title should to contain a placeholder (example: '{vt} - Measurement X') to prevent from duplicate execution names.
  */
  public string $uniqueExecutionName;
  
  /*
  * defines, if the study protocol tolerates this execution to be 'skipped' (if not, a missed execution is treated as 'lost' and can cause the exclusion of the participant)
  */
  public bool $skipable;
  
  public string $eventOnSkip;
  
  public string $eventOnLost;
  
  /*
  * The Position (1..x) of this inducement within the parent schedule. This value is relevant for addressing predecessors as fixpoint for the offest-calculation. Within one schedule there can only be one inducement for each position! The 0 is reserved for addressing the parent schedule itself and must not be used as well as negative values!
  */
  public int $position;
  
  /*
  * 0=InducementOfScheduleOrCycle: when the start of the parent Schedule (for the current cycle) was induced / -1=InducementOfPredessessor: when the direct predecessor task or subschedule (based on the 'Position') within the current schedule was induced / 1..x: when the predecessor at the Position within the current schedule, ADRESSED by the given value, was induced *items of sub-schedules are not relevant - when addressing a sub-schedule as predecessor, then only its entry will be used *this behaviour can be concretized via 'SchedulingByEstimate'
  */
  public int $schedulingOffsetFixpoint;
  
  /*
  * If set to true, the offset calculation will be based on the ESTIMATED completion of the predecessor (see 'Fixpoint'). Otherwise, when set to false, the offset calculation will be based on the REAL completion (if recorded execution data is available during calculation) of the predecessor. *this will not evaluated, when the 'Fixpoint' is set to 0!
  */
  public bool $schedulingByEstimate;
  
  /*
  * The name of a Sub-Study for which this Task should be induced or empty when its part of the current Arms regular workflow *this field is optional (use null as value)
  */
  public string $dedicatedToSubstudy;
  
  /*
  * Number, which can be used via Placeholder {#} within the UniqueExecutionName and which will automatically increase when using cycles or sub-schedules
  */
  public int $taskNumber;
  
}

public class InducedProcedure {
  
  public string $id;
  
  public string $procedureScheduleId;
  
  /*
  * estimated scheduling date relative to the scheduling date of the parent ProcedureSchedule
  */
  public int $schedulingOffset;
  
  /*
  * 'M'=Months / 'W'=Weeks / 'D'=Days
  */
  public string $schedulingOffsetUnit;
  
  /*
  * defines an additional variability RELATIVE to the estimated scheduling date (which is calculated from the offset), in this case the EARLIEST possible date.
  */
  public int $schedulingVariabilityBefore;
  
  /*
  * defines an additional variability RELATIVE to the estimated scheduling date (which is calculated from the offset), in this case the LATEST possible date.
  */
  public int $schedulingVariabilityAfter;
  
  /*
  * 'M'=Months / 'W'=Weeks / 'D'=Days
  */
  public string $schedulingVariabilityUnit;
  
  /*
  * *this field has a max length of 50
  */
  public string $prodecureDefinitionName;
  
  /*
  * the name for the induced execution (=VISIT), like 'V0', which is usually defined by the study protocol. if multiple inducements are possible (for example when using cycles), the title should to contain a placeholder (example: 'C{cy}-V0') to prevent from duplicate execution names.
  */
  public string $uniqueExecutionName;
  
  /*
  * defines, if the study protocol tolerates this execution to be 'skipped' (if not, a missed execution is treated as 'lost' and can cause the exclusion of the participant)
  */
  public bool $skipable;
  
  public string $eventOnSkip;
  
  public string $eventOnLost;
  
  /*
  * The Position (1..x) of this inducement within the parent schedule. This value is relevant for addressing predecessors as fixpoint for the offest-calculation. Within one schedule there can only be one inducement for each position! The 0 is reserved for addressing the parent schedule itself and must not be used as well as negative values!
  */
  public int $position;
  
  /*
  * 0=InducementOfScheduleOrCycle: when the start of the parent Schedule (for the current cycle) was induced / -1=InducementOfPredessessor: when the direct predecessor procedure or subschedule (based on the 'Position') within the current schedule was induced / 1..x: when the predecessor at the Position within the current schedule, ADRESSED by the given value, was induced *items of sub-schedules are not relevant - when addressing a sub-schedule as predecessor, then only its entry will be used *this behaviour can be concretized via 'SchedulingByEstimate'
  */
  public int $schedulingOffsetFixpoint;
  
  /*
  * If set to true, the offset calculation will be based on the ESTIMATED completion of the predecessor (see 'Fixpoint'). Otherwise, when set to false, the offset calculation will be based on the REAL completion (if recorded execution data is available during calculation) of the predecessor. *this will not evaluated, when the 'Fixpoint' is set to 0!
  */
  public bool $schedulingByEstimate;
  
  /*
  * The name of a Sub-Study for which this procedure should be induced or empty when its part of the current Arms regular workflow  *this field is optional (use null as value)
  */
  public string $dedicatedToSubstudy;
  
  /*
  * Number, which can be used via Placeholder {#} within the UniqueExecutionName and which will automatically increase when using cycles or sub-schedules
  */
  public int $visitNumber;
  
}

public class InducedSubProcedureSchedule {
  
  public string $id;
  
  public string $parentProcedureScheduleId;
  
  public string $inducedProcedureScheduleId;
  
  /*
  * estimated scheduling date relative to the scheduling date of the parent ProcedureSchedule
  */
  public int $schedulingOffset;
  
  /*
  * 'M'=Months / 'W'=Weeks / 'D'=Days
  */
  public string $schedulingOffsetUnit;
  
  public bool $sharedSkipCounters;
  
  public bool $sharedLostCounters;
  
  /*
  * The Position (1..x) of this inducement within the parent schedule. This value is relevant for addressing predecessors as fixpoint for the offest-calculation. Within one schedule there can only be one inducement for each position! The 0 is reserved for addressing the parent schedule itself and must not be used as well as negative values!
  */
  public int $position;
  
  /*
  * 0=InducementOfScheduleOrCycle: when the start of the parent Schedule (for the current cycle) was induced / -1=InducementOfPredessessor: when the direct predecessor procedure or subschedule (based on the 'Position') within the current schedule was induced / 1..x: when the predecessor at the Position within the current schedule, ADRESSED by the given value, was induced *items of sub-schedules are not relevant - when addressing a sub-schedule as predecessor, then only its entry will be used *this behaviour can be concretized via 'SchedulingByEstimate'
  */
  public int $schedulingOffsetFixpoint;
  
  /*
  * If set to true, the offset calculation will be based on the ESTIMATED completion of the predecessor (see 'Fixpoint'). Otherwise, when set to false, the offset calculation will be based on the REAL completion (if recorded execution data is available during calculation) of the predecessor. *this will not evaluated, when the 'Fixpoint' is set to 0!
  */
  public bool $schedulingByEstimate;
  
  /*
  * The name of a Sub-Study for which this schedule should be induced or empty when its part of the current Arms regular workflow  *this field is optional (use null as value)
  */
  public string $dedicatedToSubstudy;
  
  public int $increaseVisitNumberBase;
  
  public bool $inheritVisitNumberBase;
  
}

public class InducedSubTaskSchedule {
  
  public string $id;
  
  public string $parentTaskScheduleId;
  
  public string $inducedTaskScheduleId;
  
  /*
  * estimated scheduling time relative to the scheduling date of the parent ProcedureSchedule
  */
  public int $schedulingOffset;
  
  /*
  * 'h'=Hours / 'm'=Minutes / 's'=Seconds
  */
  public string $schedulingOffsetUnit;
  
  public bool $sharedSkipCounters;
  
  public bool $sharedLostCounters;
  
  /*
  * The Position (1..x) of this inducement within the parent schedule. This value is relevant for addressing predecessors as fixpoint for the offest-calculation. Within one schedule there can only be one inducement for each position! The 0 is reserved for addressing the parent schedule itself and must not be used as well as negative values!
  */
  public int $position;
  
  /*
  * 0=InducementOfScheduleOrCycle: when the start of the parent Schedule (for the current cycle) was induced / -1=InducementOfPredessessor: when the direct predecessor task or subschedule (based on the 'Position') within the current schedule was induced / 1..x: when the predecessor at the Position within the current schedule, ADRESSED by the given value, was induced *items of sub-schedules are not relevant - when addressing a sub-schedule as predecessor, then only its entry will be used *this behaviour can be concretized via 'SchedulingByEstimate'
  */
  public int $schedulingOffsetFixpoint;
  
  /*
  * If set to true, the offset calculation will be based on the ESTIMATED completion of the predecessor (see 'Fixpoint'). Otherwise, when set to false, the offset calculation will be based on the REAL completion (if recorded execution data is available during calculation) of the predecessor. *this will not evaluated, when the 'Fixpoint' is set to 0!
  */
  public bool $schedulingByEstimate;
  
  /*
  * The name of a Sub-Study for which this schedule should be induced or empty when its part of the current Arms regular workflow  *this field is optional (use null as value)
  */
  public string $dedicatedToSubstudy;
  
  public int $increaseVisitNumberBase;
  
  public bool $inheritVisitNumberBase;
  
}

public class InducedTreatmentTask {
  
  public string $id;
  
  public string $taskScheduleId;
  
  /*
  * *this field has a max length of 50
  */
  public string $taskDefinitionName;
  
  /*
  * estimated scheduling time relative to the scheduling date of the parent TaskSchedule
  */
  public int $schedulingOffset;
  
  /*
  * 'h'=Hours / 'm'=Minutes / 's'=Seconds
  */
  public string $schedulingOffsetUnit;
  
  /*
  * defines an additional variability RELATIVE to the estimated scheduling time (which is calculated from the offset), in this case the EARLIEST possible time.
  */
  public string $schedulingVariabilityBefore;
  
  /*
  * defines an additional variability RELATIVE to the estimated scheduling time (which is calculated from the offset), in this case the LATEST possible time.
  */
  public string $schedulingVariabilityAfter;
  
  /*
  * 'h'=Hours / 'm'=Minutes / 's'=Seconds
  */
  public string $schedulingVariabilityUnit;
  
  /*
  * the name for the induced execution, like 'Measurement X', which is usually defined by the study protocol. if multiple inducements are possible (for example when using cycles), the title should to contain a placeholder (example: '{vt} - Measurement X') to prevent from duplicate execution names.
  */
  public string $uniqueExecutionName;
  
  /*
  * defines, if the study protocol tolerates this execution to be 'skipped' (if not, a missed execution is treated as 'lost' and can cause the exclusion of the participant)
  */
  public bool $skipable;
  
  public string $eventOnSkip;
  
  public string $eventOnLost;
  
  /*
  * The Position (1..x) of this inducement within the parent schedule. This value is relevant for addressing predecessors as fixpoint for the offest-calculation. Within one schedule there can only be one inducement for each position! The 0 is reserved for addressing the parent schedule itself and must not be used as well as negative values!
  */
  public int $position;
  
  /*
  * 0=InducementOfScheduleOrCycle: when the start of the parent Schedule (for the current cycle) was induced / -1=InducementOfPredessessor: when the direct predecessor task or subschedule (based on the 'Position') within the current schedule was induced / 1..x: when the predecessor at the Position within the current schedule, ADRESSED by the given value, was induced *items of sub-schedules are not relevant - when addressing a sub-schedule as predecessor, then only its entry will be used *this behaviour can be concretized via 'SchedulingByEstimate'
  */
  public int $schedulingOffsetFixpoint;
  
  /*
  * If set to true, the offset calculation will be based on the ESTIMATED completion of the predecessor (see 'Fixpoint'). Otherwise, when set to false, the offset calculation will be based on the REAL completion (if recorded execution data is available during calculation) of the predecessor. *this will not evaluated, when the 'Fixpoint' is set to 0!
  */
  public bool $schedulingByEstimate;
  
  /*
  * The name of a Sub-Study for which this Task should be induced or empty when its part of the current Arms regular workflow *this field is optional (use null as value)
  */
  public string $dedicatedToSubstudy;
  
  /*
  * Number, which can be used via Placeholder {#} within the UniqueExecutionName and which will automatically increase when using cycles or sub-schedules
  */
  public int $taskNumber;
  
}

public class ProcedureCycleDefinition {
  
  public string $procedureScheduleId;
  
  /*
  * 0=InducementOfScheduleOrCycle: when the start of the last cycle was induced / -1=InducementOfPredessessor: when the last procedure or subschedule (based on the 'Position') of the previous cycle was induced. *items of sub-schedules are not relevant - when addressing a sub-schedule as predecessor, then only its entry will be used *this behaviour can be concretized via 'ReschedulingByEstimate'
  */
  public int $reschedulingOffsetFixpoint;
  
  /*
  * estimated scheduling date relative to the ReschedulingBase
  */
  public int $reschedulingOffset;
  
  /*
  * 'M'=Months / 'W'=Weeks / 'D'=Days
  */
  public string $reschedulingOffsetUnit;
  
  /*
  * number of cycles (of null for a infinite number of cycles) *this field is optional
  */
  public ?int $cycleLimit;
  
  public bool $sharedSkipCounters;
  
  public bool $sharedLostCounters;
  
  /*
  * If set to true, the offset calculation will be based on the ESTIMATED completion of the predecessor (see 'Fixpoint'). Otherwise, when set to false, the offset calculation will be based on the REAL completion (if recorded execution data is available during calculation) of the predecessor. *this will not evaluated, when the 'Fixpoint' is set to 0!
  */
  public bool $reschedulingByEstimate;
  
  /*
  * -1: automatic, based on the usage of visit numbers within the schedule
  */
  public int $increaseVisitNumberBasePerCycle;
  
}

public class ProcedureDefinition {
  
  /*
  * Name of the Definition - INVARIANT! because it is used to generate Identifers for induced executions! *this field has a max length of 50
  */
  public string $prodecureDefinitionName;
  
  /*
  * *this field has a max length of 100
  */
  public string $studyWorkflowName;
  
  /*
  * *this field has a max length of 20
  */
  public string $studyWorkflowVersion;
  
  /*
  * the TaskSchedule which is representing the primary-/entry-workflow (estimated tasks) when executing this visit *this field is optional
  */
  public ?string $rootTaskScheduleId;
  
  /*
  * *this field is optional
  */
  public ?float $billablePriceOnAbortedExecution;
  
  /*
  * *this field is optional
  */
  public ?float $billablePriceOnCompletedExecution;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $visitSpecificDocumentationUrl;
  
}

public class ProcedureSchedule {
  
  public string $procedureScheduleId;
  
  /*
  * *this field has a max length of 100
  */
  public string $studyWorkflowName;
  
  /*
  * *this field has a max length of 20
  */
  public string $studyWorkflowVersion;
  
  /*
  * Name of the Workflow which is represented by this schedule - INVARIANT! because it is used to generate Identifers for induced executions!
  */
  public string $scheduleWorkflowName;
  
  public string $maxSkipsBeforeLost;
  
  public string $maxSubsequentSkipsBeforeLost;
  
  public string $maxLostsBeforeLtfuAbort;
  
  public string $maxSubsequentLostsBeforeLtfuAbort;
  
  public string $eventOnLtfuAbort;
  
  public string $eventOnCycleEnded;
  
  public string $eventOnAllCyclesEnded;
  
  public string $inducingEvents;
  
  public string $abortCausingEvents;
  
  public List<InducedProcedure> $inducedProcedures;
  
  public List<InducedSubProcedureSchedule> $inducedSubProcedureSchedules;
  
  public ProcedureCycleDefinition $cycleDefinition;
  
}

public class ResearchStudyDefinition {
  
  /*
  * the official invariant name of the study as given by the sponsor *this field has a max length of 100
  */
  public string $studyWorkflowName;
  
  /*
  * This value follows the rules of 'Semantic Versioning' (https://semver.org) and needs to be updated exactly and only on transition to DraftState.Released! If the previously DraftState was 'DraftNewFix', then the 3. number must be increased at this time! If the previously DraftState was 'DraftNewMinor', then the 2. number must be increased, and the 3. number must be set to 0 at this time! If the previously DraftState was 'DraftNewMajor', then the 1. number must be increased, and the 2.+3. number must be set to 0 at this time! *this field has a max length of 20
  */
  public string $studyWorkflowVersion;
  
  public string $officialLabel;
  
  public string $definitionOwner;
  
  public string $documentationUrl;
  
  /*
  * Logo in base64 *this field is optional (use null as value)
  */
  public string $logoImage;
  
  public string $description;
  
  /*
  * IT MUST NOT be updated on every change during Draft! Format: the Author, which is starting the new Draft (Alphanumeric, in PascalCase without blanks or other Symbols) + the current UTC-Time when setting the value (in ISO8601 format) separated by a Pipe "|" Sample: "MaxMustermann|2020-06-15T13:45:30.0000000Z".
  */
  public string $versionIdentity;
  
  public string $lastChangeUtc;
  
  /*
  * 0=Released / 1=DraftNewFix / 2=DraftNewMinor / 3=DraftNewMajor
  */
  public int $draftState;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $billingCurrency;
  
  /*
  * *this field is optional
  */
  public ?float $billablePriceForGeneralPreparation;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $studyDocumentationUrl;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $caseReportFormUrl;
  
  public List<Arm> $arms;
  
  public List<DataRecordingTaskDefinition> $dataRecordingTasks;
  
  public List<DrugApplymentTaskDefinition> $drugApplymentTasks;
  
  public List<ProcedureDefinition> $procedureDefinitions;
  
  public List<ProcedureSchedule> $procedureSchedules;
  
  public List<TreatmentTaskDefinition> $treatmentTasks;
  
  public List<TaskSchedule> $taskSchedules;
  
  public List<StudyEvent> $events;
  
  public List<SubStudy> $subStudies;
  
}

/*
* Composite Key, which represents the primary identity of a ResearchStudyDefinition
*/
public class ResearchStudyDefinitionIdentity {
  
}

public class StudyEvent {
  
  /*
  * *this field has a max length of 50
  */
  public string $studyEventName;
  
  /*
  * *this field has a max length of 100
  */
  public string $studyWorkflowName;
  
  /*
  * *this field has a max length of 20
  */
  public string $studyWorkflowVersion;
  
  /*
  * *this field is optional
  */
  public ?int $maxOccourrencesBeforeExclusion;
  
  public bool $allowManualTrigger;
  
  public string $description;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $evenSpecificDocumentationUrl;
  
}

public class SubStudy {
  
  /*
  * *this field has a max length of 50
  */
  public string $subStudyName;
  
  /*
  * *this field has a max length of 100
  */
  public string $studyWorkflowName;
  
  /*
  * *this field has a max length of 20
  */
  public string $studyWorkflowVersion;
  
}

public class TaskCycleDefinition {
  
  public string $taskScheduleId;
  
  /*
  * 0=InducementOfScheduleOrCycle: when the start of the last cycle was induced / -1=InducementOfPredessessor: when the last task or subschedule (based on the 'Position') of the previous cycle was induced. *items of sub-schedules are not relevant - when addressing a sub-schedule as predecessor, then only its entry will be used *this behaviour can be concretized via 'ReschedulingByEstimate'
  */
  public int $reschedulingOffsetFixpoint;
  
  /*
  * estimated scheduling time relative to the ReschedulingBase
  */
  public int $reschedulingOffset;
  
  /*
  * 'h'=Hours / 'm'=Minutes / 's'=Seconds
  */
  public string $reschedulingOffsetUnit;
  
  /*
  * number of cycles (of null for a infinite number of cycles) *this field is optional
  */
  public ?int $cycleLimit;
  
  public bool $sharedSkipCounters;
  
  public bool $sharedLostCounters;
  
  /*
  * If set to true, the offset calculation will be based on the ESTIMATED completion of the predecessor (see 'Fixpoint'). Otherwise, when set to false, the offset calculation will be based on the REAL completion (if recorded execution data is available during calculation) of the predecessor. *this will not evaluated, when the 'Fixpoint' is set to 0!
  */
  public bool $reschedulingByEstimate;
  
  /*
  * -1: automatic, based on the usage of task numbers within the schedule
  */
  public int $increaseTaskNumberBasePerCycle;
  
}

public class TaskSchedule {
  
  public string $taskScheduleId;
  
  /*
  * *this field has a max length of 100
  */
  public string $studyWorkflowName;
  
  /*
  * *this field has a max length of 20
  */
  public string $studyWorkflowVersion;
  
  /*
  * Name of the Workflow which is represented by this schedule - INVARIANT! because it is used to generate Identifers for induced executions!
  */
  public string $scheduleWorkflowName;
  
  public string $maxSkipsBeforeLost;
  
  public string $maxSubsequentSkipsBeforeLost;
  
  public string $maxLostsBeforeLtfuAbort;
  
  public string $maxSubsequentLostsBeforeLtfuAbort;
  
  public string $eventOnLtfuAbort;
  
  public string $eventOnCycleEnded;
  
  public string $eventOnAllCyclesEnded;
  
  public string $inducingEvents;
  
  public string $abortCausingEvents;
  
  public List<InducedDataRecordingTask> $inducedDataRecordingTasks;
  
  public List<InducedDrugApplymentTask> $inducedDrugApplymentTasks;
  
  public List<InducedSubTaskSchedule> $inducedSubTaskSchedules;
  
  public List<InducedTreatmentTask> $inducedTreatmentTasks;
  
  public TaskCycleDefinition $cycleDefinition;
  
}

public class TreatmentTaskDefinition {
  
  /*
  * Name of the Definition - INVARIANT! because it is used to generate Identifers for induced executions! *this field has a max length of 50
  */
  public string $taskDefinitionName;
  
  /*
  * *this field has a max length of 100
  */
  public string $studyWorkflowName;
  
  /*
  * *this field has a max length of 20
  */
  public string $studyWorkflowVersion;
  
  /*
  * *this field is optional
  */
  public ?float $billablePriceOnCompletedExecution;
  
  public string $shortDescription;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $taskSpecificDocumentationUrl;
  
  public string $treatmentDescription;
  
  /*
  * *this field is optional (use null as value)
  */
  public string $importantNotices;
  
}
