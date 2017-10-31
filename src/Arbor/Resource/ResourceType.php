<?php

namespace Arbor\Resource;

class ResourceType
{
    const ACADEMIC_CALENDAR_DATE = 'AcademicCalendarDate';
    const ACADEMIC_HOLIDAY = 'AcademicHoliday';
    const ACADEMIC_LEVEL = 'AcademicLevel';
    const ACADEMIC_LEVEL_MEMBERSHIP = 'AcademicLevelMembership';
    const ACADEMIC_LEVEL_REGISTRATION_FORM_MAPPING = 'AcademicLevelRegistrationFormMapping';
    const ACADEMIC_LEVEL_TUTOR = 'AcademicLevelTutor';
    const ACADEMIC_NOTE = 'AcademicNote';
    const ACADEMIC_PROGRAMME = 'AcademicProgramme';
    const ACADEMIC_PROGRAMME_INSTANCE = 'AcademicProgrammeInstance';
    const ACADEMIC_TEACHING_HOUR = 'AcademicTeachingHour';
    const ACADEMIC_UNIT = 'AcademicUnit';
    const ACADEMIC_UNIT_ASSESSMENT = 'AcademicUnitAssessment';
    const ACADEMIC_UNIT_AUTOMATIC_ENROLMENT = 'AcademicUnitAutomaticEnrolment';
    const ACADEMIC_UNIT_COHORT = 'AcademicUnitCohort';
    const ACADEMIC_UNIT_COHORT_MEMBERSHIP = 'AcademicUnitCohortMembership';
    const ACADEMIC_UNIT_CURRICULUM = 'AcademicUnitCurriculum';
    const ACADEMIC_UNIT_DEPARTMENT = 'AcademicUnitDepartment';
    const ACADEMIC_UNIT_ENROLMENT = 'AcademicUnitEnrolment';
    const ACADEMIC_UNIT_LEAD = 'AcademicUnitLead';
    const ACADEMIC_UNIT_QUALIFICATION_LINK = 'AcademicUnitQualificationLink';
    const ACADEMIC_UNIT_TAG = 'AcademicUnitTag';
    const ACADEMIC_WORKING_DAY = 'AcademicWorkingDay';
    const ACADEMIC_YEAR = 'AcademicYear';
    const ACADEMIC_YEAR_ASSESSMENT = 'AcademicYearAssessment';
    const ACADEMIC_YEAR_ENROLMENT = 'AcademicYearEnrolment';
    const ACADEMIC_YEAR_SETUP_TASK = 'AcademicYearSetupTask';
    const ACCESS_ARRANGEMENT = 'AccessArrangement';
    const ACHIEVEMENT_LEVEL = 'AchievementLevel';
    const ACHIEVEMENT_LEVEL_SET = 'AchievementLevelSet';
    const AD_HOC_ASSESSMENT = 'AdHocAssessment';
    const AD_HOC_ASSESSMENT_BATCH = 'AdHocAssessmentBatch';
    const AD_HOC_ASSESSMENT_BATCH_TARGET = 'AdHocAssessmentBatchTarget';
    const AD_HOC_ASSESSMENT_CATEGORY = 'AdHocAssessmentCategory';
    const ADDITIONAL_PAYMENT_REASON = 'AdditionalPaymentReason';
    const ALERT = 'Alert';
    const ALLOWANCE = 'Allowance';
    const ALLOWANCE_AMOUNT = 'AllowanceAmount';
    const API_KEY = 'ApiKey';
    const APPLICATION = 'Application';
    const APPLICATION_APPEAL = 'ApplicationAppeal';
    const APPLICATION_SETTING = 'ApplicationSetting';
    const APPLICATION_WITHDRAWAL_REASON = 'ApplicationWithdrawalReason';
    const ASSESSMENT = 'Assessment';
    const ASSESSMENT_DATA_COLLECTION = 'AssessmentDataCollection';
    const ASSESSMENT_DATA_COLLECTION_ITEM = 'AssessmentDataCollectionItem';
    const ASSESSMENT_DATA_COLLECTION_POLICY = 'AssessmentDataCollectionPolicy';
    const ASSESSMENT_DATA_COLLECTION_POLICY_AD_HOC_ASSESSMENT_RULE = 'AssessmentDataCollectionPolicyAdHocAssessmentRule';
    const ASSESSMENT_DATA_COLLECTION_POLICY_PROGRESS_ASSESSMENT_RULE = 'AssessmentDataCollectionPolicyProgressAssessmentRule';
    const ASSESSMENT_DATA_COLLECTION_POLICY_STUDENT_GROUP = 'AssessmentDataCollectionPolicyStudentGroup';
    const ASSESSMENT_DERIVATION = 'AssessmentDerivation';
    const ASSESSMENT_DERIVATION_DEPENDANT = 'AssessmentDerivationDependant';
    const ASSESSMENT_GRADE_SET = 'AssessmentGradeSet';
    const ASSESSMENT_STUDENT_GROUP = 'AssessmentStudentGroup';
    const ATTAINMENT_GROUP = 'AttainmentGroup';
    const ATTENDANCE_FOLLOW_UP = 'AttendanceFollowUp';
    const ATTENDANCE_MARK = 'AttendanceMark';
    const ATTENDANCE_PATTERN = 'AttendancePattern';
    const ATTENDANCE_PATTERN_PERIOD = 'AttendancePatternPeriod';
    const ATTENDANCE_RECORD = 'AttendanceRecord';
    const ATTENDANCE_REGISTER = 'AttendanceRegister';
    const ATTENDANCE_REGISTER_TYPE = 'AttendanceRegisterType';
    const ATTENDANCE_REGISTER_TYPE_MARK = 'AttendanceRegisterTypeMark';
    const ATTENDANCE_ROLL_CALL = 'AttendanceRollCall';
    const ATTENDANCE_ROLL_CALL_RECORD = 'AttendanceRollCallRecord';
    const ATTENDANCE_ROLL_CALL_TIME = 'AttendanceRollCallTime';
    const AWARDING_ORGANIZATION = 'AwardingOrganization';
    const BANK = 'Bank';
    const BANK_ACCOUNT = 'BankAccount';
    const BANK_DEPOSIT = 'BankDeposit';
    const BANK_DETAIL = 'BankDetail';
    const BEHAVIOUR = 'Behaviour';
    const BEHAVIOUR_DEFAULT_WATCHER = 'BehaviourDefaultWatcher';
    const BEHAVIOUR_FOLLOW_UP = 'BehaviourFollowUp';
    const BEHAVIOUR_LOCATION = 'BehaviourLocation';
    const BEHAVIOUR_TIME = 'BehaviourTime';
    const BEHAVIOURAL_CONTRACT = 'BehaviouralContract';
    const BEHAVIOURAL_CONTRACT_GOAL = 'BehaviouralContractGoal';
    const BEHAVIOURAL_CONTRACT_PARTY = 'BehaviouralContractParty';
    const BEHAVIOURAL_CONTRACT_PERIOD = 'BehaviouralContractPeriod';
    const BEHAVIOURAL_INCIDENT = 'BehaviouralIncident';
    const BEHAVIOURAL_INCIDENT_ACTION = 'BehaviouralIncidentAction';
    const BEHAVIOURAL_INCIDENT_BEHAVIOUR = 'BehaviouralIncidentBehaviour';
    const BEHAVIOURAL_INCIDENT_DEFAULT_WATCHER = 'BehaviouralIncidentDefaultWatcher';
    const BEHAVIOURAL_INCIDENT_LEVEL_WORKFLOW = 'BehaviouralIncidentLevelWorkflow';
    const BEHAVIOURAL_INCIDENT_STAFF_INVOLVEMENT = 'BehaviouralIncidentStaffInvolvement';
    const BEHAVIOURAL_INCIDENT_STUDENT_INVOLVEMENT = 'BehaviouralIncidentStudentInvolvement';
    const BEHAVIOURAL_INCIDENT_WATCHER = 'BehaviouralIncidentWatcher';
    const BEHAVIOURAL_NOTE = 'BehaviouralNote';
    const BILL_PAYER = 'BillPayer';
    const BOARDING_PATTERN = 'BoardingPattern';
    const BOARDING_STATUS = 'BoardingStatus';
    const BOOK = 'Book';
    const BOOKABLE_RESOURCE_PERIOD = 'BookableResourcePeriod';
    const BUSINESS_ROLE = 'BusinessRole';
    const BUSINESS_ROLE_ASSIGNMENT = 'BusinessRoleAssignment';
    const BUSINESS_ROLE_DEFAULT_USER_ROLE = 'BusinessRoleDefaultUserRole';
    const CALENDAR = 'Calendar';
    const CALENDAR_ENTRY_MAPPING = 'CalendarEntryMapping';
    const CALENDAR_ENTRY_REMINDER = 'CalendarEntryReminder';
    const CALENDAR_TYPE = 'CalendarType';
    const CANDIDATE = 'Candidate';
    const CANDIDATE_ACCESS_ARRANGEMENT = 'CandidateAccessArrangement';
    const CANDIDATE_ASSESSABLE_ENTRY = 'CandidateAssessableEntry';
    const CANDIDATE_ENROLMENT = 'CandidateEnrolment';
    const CANDIDATE_ENTRY = 'CandidateEntry';
    const CANDIDATE_ENTRY_AUDIT = 'CandidateEntryAudit';
    const CANDIDATE_ENTRY_PROPOSAL = 'CandidateEntryProposal';
    const CANDIDATE_ENTRY_WITHDRAWAL_PROPOSAL = 'CandidateEntryWithdrawalProposal';
    const CANDIDATE_PROPOSAL = 'CandidateProposal';
    const CANDIDATE_PROPOSAL_COMMENT = 'CandidateProposalComment';
    const CANDIDATE_REGISTRATION = 'CandidateRegistration';
    const CANDIDATE_REGISTRATION_AUDIT = 'CandidateRegistrationAudit';
    const CANDIDATE_REGISTRATION_PROPOSAL = 'CandidateRegistrationProposal';
    const CANDIDATE_REGISTRATION_WITHDRAWAL_PROPOSAL = 'CandidateRegistrationWithdrawalProposal';
    const CASH_PAYOUT = 'CashPayout';
    const CASH_RECEIPT = 'CashReceipt';
    const CHECK_CLEARANCE_LEVEL = 'CheckClearanceLevel';
    const CHECK_TYPE = 'CheckType';
    const CHEQUE = 'Cheque';
    const CHEQUE_BOOK = 'ChequeBook';
    const CHILD_PROTECTION_STATUS = 'ChildProtectionStatus';
    const CHILD_PROTECTION_STATUS_ASSIGNMENT = 'ChildProtectionStatusAssignment';
    const CLUB = 'Club';
    const CLUB_ELIGIBILITY = 'ClubEligibility';
    const CLUB_LEAD = 'ClubLead';
    const CLUB_MEMBERSHIP = 'ClubMembership';
    const CLUB_MEMBERSHIP_PERIOD = 'ClubMembershipPeriod';
    const CLUB_MEMBERSHIP_PERIOD_PRICE = 'ClubMembershipPeriodPrice';
    const CLUB_SESSION = 'ClubSession';
    const COMMUNICATION_ACTION = 'CommunicationAction';
    const COMMUNICATION_TAG = 'CommunicationTag';
    const COMMUNICATION_TEMPLATE = 'CommunicationTemplate';
    const COMPANY = 'Company';
    const COMPANY_STAFF = 'CompanyStaff';
    const CONSENT = 'Consent';
    const CONSENT_TYPE = 'ConsentType';
    const CONTENT = 'Content';
    const CONTENT_TAG = 'ContentTag';
    const COUNTRY = 'Country';
    const COURT_ORDER = 'CourtOrder';
    const COURT_ORDER_PARTY = 'CourtOrderParty';
    const COVER_ARRANGEMENT = 'CoverArrangement';
    const COVER_REQUIREMENT = 'CoverRequirement';
    const CURRICULUM = 'Curriculum';
    const CURRICULUM_GRADE = 'CurriculumGrade';
    const CURRICULUM_SECTION = 'CurriculumSection';
    const CURRICULUM_STATEMENT = 'CurriculumStatement';
    const CURRICULUM_STATEMENT_BAND = 'CurriculumStatementBand';
    const CURRICULUM_TARGET = 'CurriculumTarget';
    const CURRICULUM_TARGET_SET = 'CurriculumTargetSet';
    const CURRICULUM_TIER = 'CurriculumTier';
    const CUSTOM_GROUP = 'CustomGroup';
    const CUSTOM_GROUP_MEMBERSHIP = 'CustomGroupMembership';
    const CUSTOM_REPORT = 'CustomReport';
    const CUSTOM_REPORT_COLUMN = 'CustomReportColumn';
    const CUSTOM_REPORT_EMAIL_LOG = 'CustomReportEmailLog';
    const CUSTOM_REPORT_GROUPING = 'CustomReportGrouping';
    const CUSTOM_REPORT_ORDERING = 'CustomReportOrdering';
    const CUSTOM_REPORT_POST_GROUPING_FILTER = 'CustomReportPostGroupingFilter';
    const CUSTOM_REPORT_SCHEDULED_EXPORT = 'CustomReportScheduledExport';
    const CUSTOM_REPORT_SCHEDULED_EXPORT_RECIPIENT = 'CustomReportScheduledExportRecipient';
    const CUSTOM_REPORT_SCHEDULED_EXPORT_REPORT = 'CustomReportScheduledExportReport';
    const CUSTOM_REPORT_SCOPE = 'CustomReportScope';
    const CUSTOM_REPORT_SCOPE_FILTER = 'CustomReportScopeFilter';
    const CUSTOM_REPORT_SHARE = 'CustomReportShare';
    const CUSTOMER_ACCOUNT = 'CustomerAccount';
    const CUSTOMER_ACCOUNT_REFUND = 'CustomerAccountRefund';
    const CUSTOMER_ACCOUNT_TYPE = 'CustomerAccountType';
    const CUSTOMER_CREDIT_NOTE = 'CustomerCreditNote';
    const CUSTOMER_CREDIT_NOTE_ITEM = 'CustomerCreditNoteItem';
    const CUSTOMER_INVOICE = 'CustomerInvoice';
    const CUSTOMER_INVOICE_ITEM = 'CustomerInvoiceItem';
    const CUSTOMER_PAYMENT = 'CustomerPayment';
    const CUSTOMER_PREPAYMENT = 'CustomerPrepayment';
    const DASHBOARD = 'Dashboard';
    const DASHBOARD_MEASURE = 'DashboardMeasure';
    const DASHBOARD_SECTION = 'DashboardSection';
    const DATA_CHECK_ERROR = 'DataCheckError';
    const DATA_CHECK_ERROR_RELATED_ENTITY = 'DataCheckErrorRelatedEntity';
    const DATA_EXPORT = 'DataExport';
    const DATA_EXPORT_ERROR = 'DataExportError';
    const DATA_EXPORT_ERROR_TAG = 'DataExportErrorTag';
    const DATA_ITEM_SUBSCRIPTION = 'DataItemSubscription';
    const DATA_QUALITY_CHECK_RESULT = 'DataQualityCheckResult';
    const DATA_QUALITY_CHECK_TAG = 'DataQualityCheckTag';
    const DATA_SET_SUBSCRIPTION = 'DataSetSubscription';
    const DATA_SOURCE = 'DataSource';
    const DELIVERY_ADDRESS = 'DeliveryAddress';
    const DEPARTMENT = 'Department';
    const DEPARTMENT_MEMBERSHIP = 'DepartmentMembership';
    const DEPARTMENT_RESPONSIBILITY = 'DepartmentResponsibility';
    const DEPARTMENT_RESPONSIBILITY_TYPE = 'DepartmentResponsibilityType';
    const DETENTION = 'Detention';
    const DETENTION_SESSION = 'DetentionSession';
    const DETENTION_TYPE = 'DetentionType';
    const DIETARY_REQUIREMENT = 'DietaryRequirement';
    const DIETARY_REQUIREMENT_TYPE = 'DietaryRequirementType';
    const DOCUMENT_LAYOUT = 'DocumentLayout';
    const EDUCATION_PLAN = 'EducationPlan';
    const EDUCATION_PLAN_CONTRIBUTOR = 'EducationPlanContributor';
    const EDUCATION_RECORD_TYPE = 'EducationRecordType';
    const EDUCATIONAL_INSTITUTION = 'EducationalInstitution';
    const EDUCATIONAL_INSTITUTION_ENROLMENT = 'EducationalInstitutionEnrolment';
    const EDUCATIONAL_INSTITUTION_STAFF = 'EducationalInstitutionStaff';
    const ELIGIBILITY = 'Eligibility';
    const ELIGIBILITY_RECORD = 'EligibilityRecord';
    const EMAIL = 'Email';
    const EMAIL_ACCOUNT = 'EmailAccount';
    const EMAIL_ACCOUNT_ACCESS_PERMISSION = 'EmailAccountAccessPermission';
    const EMAIL_ADDRESS = 'EmailAddress';
    const EMAIL_DRAFT = 'EmailDraft';
    const EMAIL_MAILBOX = 'EmailMailbox';
    const EMAIL_PART = 'EmailPart';
    const EMAIL_RECIPIENT = 'EmailRecipient';
    const EMAIL_REFERENCE = 'EmailReference';
    const EMAIL_SENDER = 'EmailSender';
    const EMAIL_STATUS = 'EmailStatus';
    const EMPLOYER = 'Employer';
    const EMPLOYMENT_RECORD_TYPE = 'EmploymentRecordType';
    const ENABLED_FEATURE = 'EnabledFeature';
    const ENROLMENT_MODE = 'EnrolmentMode';
    const ENROLMENT_MODE_ASSIGNMENT = 'EnrolmentModeAssignment';
    const ETHNICITY = 'Ethnicity';
    const ETHNICITY_CATEGORY = 'EthnicityCategory';
    const EVENT_PARTICIPANT = 'EventParticipant';
    const EVENT_PARTICIPANT_INVITATION = 'EventParticipantInvitation';
    const EXCLUSION_REASON = 'ExclusionReason';
    const EXTERNAL_ADMINISTRATOR = 'ExternalAdministrator';
    const FACULTY = 'Faculty';
    const FACULTY_DEPARTMENT = 'FacultyDepartment';
    const FACULTY_MEMBER = 'FacultyMember';
    const FACULTY_MEMBERSHIP = 'FacultyMembership';
    const FACULTY_RESPONSIBILITY = 'FacultyResponsibility';
    const FACULTY_RESPONSIBILITY_TYPE = 'FacultyResponsibilityType';
    const FILE = 'File';
    const FINAL_ASSESSMENT_TARGET = 'FinalAssessmentTarget';
    const FIXED_PERIOD_EXCLUSION = 'FixedPeriodExclusion';
    const FLAG = 'Flag';
    const GBR_POSTAL_ADDRESS_CLEAN_JOB = 'GbrPostalAddressCleanJob';
    const GENDER = 'Gender';
    const GRADE = 'Grade';
    const GRADE_POINT_SCALE = 'GradePointScale';
    const GRADE_POINT_SCALE_LEVEL_GRADE_SET = 'GradePointScaleLevelGradeSet';
    const GRADE_SET = 'GradeSet';
    const GUARDIAN = 'Guardian';
    const GUARDIAN_CONSULTATION = 'GuardianConsultation';
    const GUARDIAN_RELATIONSHIP_TYPE = 'GuardianRelationshipType';
    const HEARING_TEST = 'HearingTest';
    const HOUSE = 'House';
    const HOUSE_MEMBERSHIP = 'HouseMembership';
    const HOUSE_TUTOR = 'HouseTutor';
    const IDENTIFICATION_DOCUMENT_TYPE = 'IdentificationDocumentType';
    const IDENTITY_CARD = 'IdentityCard';
    const IDENTITY_CARD_READER = 'IdentityCardReader';
    const IMMUNIZATION = 'Immunization';
    const IMMUNIZATION_TYPE = 'ImmunizationType';
    const IMPAIRMENT_CATEGORY = 'ImpairmentCategory';
    const IMPORT_RECORD = 'ImportRecord';
    const IN_CARE_STATUS = 'InCareStatus';
    const IN_CARE_STATUS_ASSIGNMENT = 'InCareStatusAssignment';
    const INBOUND_SMS_MESSAGE = 'InboundSmsMessage';
    const INCOMING_BANK_TRANSACTION = 'IncomingBankTransaction';
    const INCOMING_CARD_TRANSACTION = 'IncomingCardTransaction';
    const INCOMING_DIRECT_DEBIT_AGREEMENT = 'IncomingDirectDebitAgreement';
    const INCOMING_DIRECT_DEBIT_TRANSACTION = 'IncomingDirectDebitTransaction';
    const INSIGHT_REPORT = 'InsightReport';
    const INSTITUTION_TYPE = 'InstitutionType';
    const INTAKE_SEASON = 'IntakeSeason';
    const INTAKE_SEASON_APPLICANT_BUCKET = 'IntakeSeasonApplicantBucket';
    const INTAKE_SEASON_GROUP = 'IntakeSeasonGroup';
    const INTERNAL_EXCLUSION = 'InternalExclusion';
    const INTERNAL_EXCLUSION_SESSION = 'InternalExclusionSession';
    const INTERNAL_EXCLUSION_TYPE = 'InternalExclusionType';
    const INTERVENTION = 'Intervention';
    const INTERVENTION_CATEGORY = 'InterventionCategory';
    const INTERVENTION_COST = 'InterventionCost';
    const INTERVENTION_DEFINITION = 'InterventionDefinition';
    const INTERVENTION_FILTER = 'InterventionFilter';
    const INTERVENTION_FUNDING = 'InterventionFunding';
    const INTERVENTION_FUNDING_SOURCE = 'InterventionFundingSource';
    const INTERVENTION_GROUP = 'InterventionGroup';
    const INTERVENTION_PLANNED_STAFF = 'InterventionPlannedStaff';
    const INTERVENTION_REVIEW = 'InterventionReview';
    const INTERVENTION_SESSION = 'InterventionSession';
    const INTERVENTION_STAFF = 'InterventionStaff';
    const INTERVENTION_STAFF_COST = 'InterventionStaffCost';
    const INVERSE_DEMOGRAPHIC = 'InverseDemographic';
    const INVIGILATION_DUTY = 'InvigilationDuty';
    const INVIGILATION_SESSION = 'InvigilationSession';
    const ISSUED_CHEQUE = 'IssuedCheque';
    const ITEM_UNIT = 'ItemUnit';
    const KICKBOX_RESULT = 'KickboxResult';
    const KPI = 'Kpi';
    const KPI_CALCULATION_JOB = 'KpiCalculationJob';
    const KPI_RANGE = 'KpiRange';
    const KPI_TARGET = 'KpiTarget';
    const KPI_VALUE = 'KpiValue';
    const LANGUAGE = 'Language';
    const LANGUAGE_ABILITY = 'LanguageAbility';
    const LEARNING_MATERIAL = 'LearningMaterial';
    const LEARNING_MATERIAL_FOLDER = 'LearningMaterialFolder';
    const LESSON_PLAN = 'LessonPlan';
    const LESSON_PLAN_OBJECTIVE = 'LessonPlanObjective';
    const LESSON_PLAN_SECTION = 'LessonPlanSection';
    const LESSON_PLAN_SECTION_ITEM = 'LessonPlanSectionItem';
    const LETTER = 'Letter';
    const LOCAL_AUTHORITY = 'LocalAuthority';
    const MARITAL_STATUS = 'MaritalStatus';
    const MARK_APPROVAL = 'MarkApproval';
    const MEAL = 'Meal';
    const MEAL_CHOICE = 'MealChoice';
    const MEAL_PATTERN = 'MealPattern';
    const MEAL_PRICE = 'MealPrice';
    const MEAL_PROVISION = 'MealProvision';
    const MEAL_PROVISION_PRICE_CATEGORY = 'MealProvisionPriceCategory';
    const MEAL_SESSION = 'MealSession';
    const MEAL_SESSION_REGISTER_RECORD = 'MealSessionRegisterRecord';
    const MEAL_SITTING = 'MealSitting';
    const MEAL_SITTING_AUTOMATIC_ATTENDEE_TARGET = 'MealSittingAutomaticAttendeeTarget';
    const MEDICAL_CONDITION = 'MedicalCondition';
    const MEDICAL_CONDITION_MEDICATION = 'MedicalConditionMedication';
    const MEDICAL_CONDITION_TYPE = 'MedicalConditionType';
    const MEDICAL_EVENT = 'MedicalEvent';
    const MEDICAL_EVENT_TYPE = 'MedicalEventType';
    const MEDICAL_INSTITUTION = 'MedicalInstitution';
    const MEDICAL_INSTITUTION_STAFF = 'MedicalInstitutionStaff';
    const MEDICAL_PLAN = 'MedicalPlan';
    const MEDICAL_RELATIONSHIP_TYPE = 'MedicalRelationshipType';
    const MEDICATION = 'Medication';
    const MEETING = 'Meeting';
    const MEETING_NOTE = 'MeetingNote';
    const MEETING_TOPIC = 'MeetingTopic';
    const MESSAGE_DRAFT_RECIPIENT = 'MessageDraftRecipient';
    const MOTOR_VEHICLE = 'MotorVehicle';
    const MOTOR_VEHICLE_MAKE = 'MotorVehicleMake';
    const NATIONALITY_STATUS = 'NationalityStatus';
    const NEW_REPORT_CARD_BATCH = 'NewReportCardBatch';
    const NEW_REPORT_CARD_BATCH_TARGET = 'NewReportCardBatchTarget';
    const NEW_REPORT_CARD_TEMPLATE = 'NewReportCardTemplate';
    const NEW_REPORT_CARD_TEXT = 'NewReportCardText';
    const NEW_STUDENT_REPORT_CARD = 'NewStudentReportCard';
    const NEW_STUDENT_REPORT_CARD_SECTION = 'NewStudentReportCardSection';
    const NEW_USER_REQUEST = 'NewUserRequest';
    const NEWS_FEED_MAPPING = 'NewsFeedMapping';
    const NEWS_STORY = 'NewsStory';
    const NEWS_STORY_COMMENT = 'NewsStoryComment';
    const NEXT_OF_KIN_RELATIONSHIP = 'NextOfKinRelationship';
    const NOTE = 'Note';
    const NOTICE = 'Notice';
    const OUTBOUND_LETTER = 'OutboundLetter';
    const OUTBOUND_LETTER_DRAFT = 'OutboundLetterDraft';
    const PASSWORD_RULE = 'PasswordRule';
    const PASTORAL_NOTE = 'PastoralNote';
    const PAY_SCALE = 'PayScale';
    const PAY_SCALE_GRADE = 'PayScaleGrade';
    const PAY_SCALE_GRADE_SPINAL_POINT = 'PayScaleGradeSpinalPoint';
    const PAY_SCALE_SPINAL_POINT = 'PayScaleSpinalPoint';
    const PAY_SCALE_SPINAL_POINT_VALUE = 'PayScaleSpinalPointValue';
    const PAYMENT_PROVIDER = 'PaymentProvider';
    const PAYMENT_PROVIDER_PAYOUT = 'PaymentProviderPayout';
    const PERMANENT_EXCLUSION = 'PermanentExclusion';
    const PERSON = 'Person';
    const PERSON_CHECK = 'PersonCheck';
    const PERSON_FORMER_NAME = 'PersonFormerName';
    const PERSON_IDENTIFICATION_DOCUMENT = 'PersonIdentificationDocument';
    const PERSON_IMPAIRMENT = 'PersonImpairment';
    const PERSON_NATIONALITY = 'PersonNationality';
    const PERSON_NEXT_OF_KIN = 'PersonNextOfKin';
    const PERSON_PROFESSIONAL_QUALIFICATION = 'PersonProfessionalQualification';
    const PERSON_TRAINING_COURSE = 'PersonTrainingCourse';
    const PERSON_TRANSPORTATION_METHOD = 'PersonTransportationMethod';
    const PHANTOM_MODEL = 'PhantomModel';
    const PINNED_ITEM = 'PinnedItem';
    const POINT_AWARD = 'PointAward';
    const POINT_AWARD_CATEGORY = 'PointAwardCategory';
    const POINT_AWARD_SCALE = 'PointAwardScale';
    const POSITION = 'Position';
    const POSITION_BUSINESS_ROLE = 'PositionBusinessRole';
    const POSTAL_ADDRESS = 'PostalAddress';
    const POSTAL_ADDRESS_OCCUPANCY = 'PostalAddressOccupancy';
    const PREDICTED_FINAL_ASSESSMENT_MARK = 'PredictedFinalAssessmentMark';
    const PROFESSIONAL_QUALIFICATION_CLASS = 'ProfessionalQualificationClass';
    const PROFESSIONAL_QUALIFICATION_SUBJECT = 'ProfessionalQualificationSubject';
    const PROFESSIONAL_QUALIFICATION_TYPE = 'ProfessionalQualificationType';
    const PROFILE_PICTURE_IMPORT_JOB = 'ProfilePictureImportJob';
    const PROFILE_PICTURE_IMPORT_JOB_FILE = 'ProfilePictureImportJobFile';
    const PROFILE_PICTURE_IMPORT_JOB_FILE_MATCH = 'ProfilePictureImportJobFileMatch';
    const PROGRAMME = 'Programme';
    const PROGRAMME_ACADEMIC_UNIT = 'ProgrammeAcademicUnit';
    const PROGRAMME_ENROLMENT = 'ProgrammeEnrolment';
    const PROGRAMME_INSTANCE = 'ProgrammeInstance';
    const PROGRAMME_LEAD = 'ProgrammeLead';
    const PROGRAMME_QUALIFICATION_AWARD = 'ProgrammeQualificationAward';
    const PROGRAMME_WITHDRAWAL_REASON = 'ProgrammeWithdrawalReason';
    const PROGRESS_ASSESSMENT_BATCH = 'ProgressAssessmentBatch';
    const PROGRESS_ASSESSMENT_BATCH_MEASUREMENT_PERIOD = 'ProgressAssessmentBatchMeasurementPeriod';
    const PROGRESS_ASSESSMENT_BATCH_TARGET = 'ProgressAssessmentBatchTarget';
    const PROGRESS_ASSESSMENT_BATCH_TARGET_MEASUREMENT_PERIOD = 'ProgressAssessmentBatchTargetMeasurementPeriod';
    const PROGRESS_ASSESSMENT_IMPORT_JOB = 'ProgressAssessmentImportJob';
    const PROGRESS_MEASUREMENT_PERIOD = 'ProgressMeasurementPeriod';
    const PROGRESS_MEASUREMENT_PERIOD_SET = 'ProgressMeasurementPeriodSet';
    const QUALIFICATION_ASPECT = 'QualificationAspect';
    const QUALIFICATION_ASSESSABLE = 'QualificationAssessable';
    const QUALIFICATION_ASSESSABLE_INSTANCE = 'QualificationAssessableInstance';
    const QUALIFICATION_AVAILABILITY_INSTANCE = 'QualificationAvailabilityInstance';
    const QUALIFICATION_AWARD = 'QualificationAward';
    const QUALIFICATION_AWARD_LEARNING_UNIT = 'QualificationAwardLearningUnit';
    const QUALIFICATION_AWARD_SUBTYPE = 'QualificationAwardSubtype';
    const QUALIFICATION_AWARD_TYPE = 'QualificationAwardType';
    const QUALIFICATION_CENTER_ASSESSED_OUTCOME = 'QualificationCenterAssessedOutcome';
    const QUALIFICATION_ELEMENT_AVAILABILITY = 'QualificationElementAvailability';
    const QUALIFICATION_ELEMENT_DISALLOWED_COMBINATION = 'QualificationElementDisallowedCombination';
    const QUALIFICATION_FORECAST_RESULT = 'QualificationForecastResult';
    const QUALIFICATION_GRADE = 'QualificationGrade';
    const QUALIFICATION_GRADE_SET = 'QualificationGradeSet';
    const QUALIFICATION_LEARNING_UNIT = 'QualificationLearningUnit';
    const QUALIFICATION_LEARNING_UNIT_ASSESSABLE = 'QualificationLearningUnitAssessable';
    const QUALIFICATION_LEARNING_UNIT_LEVEL = 'QualificationLearningUnitLevel';
    const QUALIFICATION_OFFERING = 'QualificationOffering';
    const QUALIFICATION_RESULT = 'QualificationResult';
    const QUALIFICATION_SCHEME = 'QualificationScheme';
    const QUALIFICATION_STUDY_GUIDE = 'QualificationStudyGuide';
    const QUALIFICATION_SUBJECT = 'QualificationSubject';
    const QUALIFICATION_SUBSCRIPTION = 'QualificationSubscription';
    const QUALIFICATION_TIMETABLE_SESSION_TYPE = 'QualificationTimetableSessionType';
    const RECEIVED_CHEQUE = 'ReceivedCheque';
    const REGION = 'Region';
    const REGISTRATION_FORM = 'RegistrationForm';
    const REGISTRATION_FORM_MEMBERSHIP = 'RegistrationFormMembership';
    const REGISTRATION_FORM_TUTOR = 'RegistrationFormTutor';
    const RELIGION = 'Religion';
    const REPEATING_SCHOOL_EVENT = 'RepeatingSchoolEvent';
    const REPEATING_SCHOOL_EVENT_PARTICIPANT = 'RepeatingSchoolEventParticipant';
    const REPORT_CARD_BATCH_ACADEMIC_UNIT = 'ReportCardBatchAcademicUnit';
    const REPORT_CARD_BATCH_AD_HOC_ASSESSMENT = 'ReportCardBatchAdHocAssessment';
    const REPORT_CARD_BATCH_CURRICULUM = 'ReportCardBatchCurriculum';
    const REPORT_CARD_BATCH_PROGRESS_ASSESSMENT = 'ReportCardBatchProgressAssessment';
    const REPORT_SUBSCRIPTION = 'ReportSubscription';
    const ROOM = 'Room';
    const ROOM_ASSET = 'RoomAsset';
    const ROOM_CHANGE_REQUIREMENT = 'RoomChangeRequirement';
    const ROOM_FEATURE = 'RoomFeature';
    const ROOM_LAYOUT = 'RoomLayout';
    const ROOM_LAYOUT_SEAT = 'RoomLayoutSeat';
    const ROOM_ROOM_ASSET = 'RoomRoomAsset';
    const ROOM_ROOM_FEATURE = 'RoomRoomFeature';
    const ROOM_UNAVAILABILITY = 'RoomUnavailability';
    const SCHOOL_EVENT = 'SchoolEvent';
    const SCHOOL_EVENT_TYPE = 'SchoolEventType';
    const SCHOOL_PHASE = 'SchoolPhase';
    const SCHOOL_PROGRESS_TARGET_RULE = 'SchoolProgressTargetRule';
    const SCHOOL_TRIP = 'SchoolTrip';
    const SCHOOLWORK = 'Schoolwork';
    const SCHOOLWORK_ASPECT = 'SchoolworkAspect';
    const SEARCH_INDEX_JOB = 'SearchIndexJob';
    const SEN_EVENT = 'SenEvent';
    const SEN_EVENT_OUTCOME = 'SenEventOutcome';
    const SEN_EVENT_OUTCOME_TYPE = 'SenEventOutcomeType';
    const SEN_EVENT_TYPE = 'SenEventType';
    const SEN_NEED = 'SenNeed';
    const SEN_NEED_TYPE = 'SenNeedType';
    const SEN_NOTE = 'SenNote';
    const SEN_STATEMENT = 'SenStatement';
    const SEN_STATUS = 'SenStatus';
    const SEN_STATUS_ASSIGNMENT = 'SenStatusAssignment';
    const SENDING_PROFILE = 'SendingProfile';
    const SESSION = 'Session';
    const SESSION_ROOM_ASSET_REQUIREMENT = 'SessionRoomAssetRequirement';
    const SESSION_ROOM_FEATURE_REQUIREMENT = 'SessionRoomFeatureRequirement';
    const SITE = 'Site';
    const SITE_OPERATING_PERIOD = 'SiteOperatingPeriod';
    const SITE_OPERATING_PERIOD_EXCEPTION = 'SiteOperatingPeriodException';
    const SITE_TRAVEL_TIME = 'SiteTravelTime';
    const SMS_MESSAGE = 'SmsMessage';
    const SMS_MESSAGE_DRAFT = 'SmsMessageDraft';
    const SMS_MESSAGE_PART = 'SmsMessagePart';
    const SMS_MESSAGE_STATUS = 'SmsMessageStatus';
    const SNIPPET = 'Snippet';
    const STAFF = 'Staff';
    const STAFF_ABSENCE = 'StaffAbsence';
    const STAFF_ABSENCE_CATEGORY = 'StaffAbsenceCategory';
    const STAFF_ABSENCE_SICKNESS_CATEGORY = 'StaffAbsenceSicknessCategory';
    const STAFF_ABSENCE_SICKNESS_SUBCATEGORY = 'StaffAbsenceSicknessSubcategory';
    const STAFF_ATTENDANCE_MARK = 'StaffAttendanceMark';
    const STAFF_ATTENDANCE_RECORD = 'StaffAttendanceRecord';
    const STAFF_CONTRACT = 'StaffContract';
    const STAFF_CONTRACT_POST = 'StaffContractPost';
    const STAFF_CONTRACT_POST_ADDITIONAL_PAYMENT = 'StaffContractPostAdditionalPayment';
    const STAFF_CONTRACT_POST_ALLOWANCE = 'StaffContractPostAllowance';
    const STAFF_CONTRACT_POST_END_REASON = 'StaffContractPostEndReason';
    const STAFF_CONTRACT_POST_RATE = 'StaffContractPostRate';
    const STAFF_CONTRACT_POST_SALARY = 'StaffContractPostSalary';
    const STAFF_CONTRACT_POST_START_REASON = 'StaffContractPostStartReason';
    const STAFF_DESTINATION = 'StaffDestination';
    const STAFF_EMPLOYMENT_TYPE = 'StaffEmploymentType';
    const STAFF_ORIGIN = 'StaffOrigin';
    const STAFF_ROOM_FEATURE_REQUIREMENT = 'StaffRoomFeatureRequirement';
    const STAFF_WORKING_PERIOD = 'StaffWorkingPeriod';
    const STANDARDIZED_ASSESSMENT_BATCH = 'StandardizedAssessmentBatch';
    const STANDARDIZED_ASSESSMENT_BATCH_TARGET = 'StandardizedAssessmentBatchTarget';
    const STANDARDIZED_ASSESSMENT_TEMPLATE = 'StandardizedAssessmentTemplate';
    const STANDARDIZED_ASSESSMENT_TEMPLATE_ASSESSMENT = 'StandardizedAssessmentTemplateAssessment';
    const STUDENT = 'Student';
    const STUDENT_ABSENCE_NOTE = 'StudentAbsenceNote';
    const STUDENT_AD_HOC_ASSESSMENT_MARK = 'StudentAdHocAssessmentMark';
    const STUDENT_ATTENDANCE_PATTERN = 'StudentAttendancePattern';
    const STUDENT_CURRICULUM_ACHIEVEMENT = 'StudentCurriculumAchievement';
    const STUDENT_CURRICULUM_EVIDENCE = 'StudentCurriculumEvidence';
    const STUDENT_CURRICULUM_SCORE = 'StudentCurriculumScore';
    const STUDENT_EDUCATIONAL_HISTORY = 'StudentEducationalHistory';
    const STUDENT_EMPLOYMENT_RECORD = 'StudentEmploymentRecord';
    const STUDENT_FUNDING = 'StudentFunding';
    const STUDENT_FUNDING_TYPE = 'StudentFundingType';
    const STUDENT_GIFT = 'StudentGift';
    const STUDENT_GUARDIAN_RELATIONSHIP = 'StudentGuardianRelationship';
    const STUDENT_INTERVENTION = 'StudentIntervention';
    const STUDENT_INTERVENTION_GOAL = 'StudentInterventionGoal';
    const STUDENT_INTERVENTION_REVIEW = 'StudentInterventionReview';
    const STUDENT_LINKED_RELATIONSHIP = 'StudentLinkedRelationship';
    const STUDENT_LINKED_RELATIONSHIP_TYPE = 'StudentLinkedRelationshipType';
    const STUDENT_MEDICAL_RELATIONSHIP = 'StudentMedicalRelationship';
    const STUDENT_OTHER_SCHOOL_ATTENDANCE_RECORD = 'StudentOtherSchoolAttendanceRecord';
    const STUDENT_PROGRESS_ASSESSMENT = 'StudentProgressAssessment';
    const STUDENT_PROGRESS_ASSESSMENT_MARK = 'StudentProgressAssessmentMark';
    const STUDENT_PROGRESS_BASELINE = 'StudentProgressBaseline';
    const STUDENT_PROGRESS_GOAL = 'StudentProgressGoal';
    const STUDENT_RECORD_CHANGE = 'StudentRecordChange';
    const STUDENT_ROOM_FEATURE_REQUIREMENT = 'StudentRoomFeatureRequirement';
    const STUDENT_SCHOOLWORK = 'StudentSchoolwork';
    const STUDENT_SCHOOLWORK_MARK = 'StudentSchoolworkMark';
    const STUDENT_STANDARDIZED_ASSESSMENT = 'StudentStandardizedAssessment';
    const STUDENT_STANDARDIZED_ASSESSMENT_MARK = 'StudentStandardizedAssessmentMark';
    const STUDENT_TALENT = 'StudentTalent';
    const SUBJECT = 'Subject';
    const SUPERANNUATION_SCHEME = 'SuperannuationScheme';
    const SUPERANNUATION_SCHEME_VALUE = 'SuperannuationSchemeValue';
    const SUSPECTED_DUPLICATE = 'SuspectedDuplicate';
    const TAG = 'Tag';
    const TAGGING = 'Tagging';
    const TALENT = 'Talent';
    const TEACHING_ASSISTANT_ALLOCATION = 'TeachingAssistantAllocation';
    const TEACHING_GROUP = 'TeachingGroup';
    const TEACHING_GROUP_MEMBERSHIP = 'TeachingGroupMembership';
    const TEACHING_GROUP_TUTOR = 'TeachingGroupTutor';
    const TELEPHONE_CALL = 'TelephoneCall';
    const TELEPHONE_NUMBER = 'TelephoneNumber';
    const TERM = 'Term';
    const THIRD_PARTY_LOGIN = 'ThirdPartyLogin';
    const THIRD_PARTY_SITE = 'ThirdPartySite';
    const TIMELINE_MAPPING = 'TimelineMapping';
    const TIMETABLE_PERIOD = 'TimetablePeriod';
    const TIMETABLE_PERIOD_GROUPING = 'TimetablePeriodGrouping';
    const TIMETABLE_SLOT = 'TimetableSlot';
    const TIMETABLE_SLOT_EXCEPTION = 'TimetableSlotException';
    const TIMETABLE_SLOT_LOCATION = 'TimetableSlotLocation';
    const TIMETABLE_SLOT_STAFF = 'TimetableSlotStaff';
    const TIMETABLER_IMPORT_RESULT = 'TimetablerImportResult';
    const TIMETABLER_IMPORT_RESULT_ERROR = 'TimetablerImportResultError';
    const TIMETABLER_IMPORT_RESULT_UPDATE = 'TimetablerImportResultUpdate';
    const TITLE = 'Title';
    const TODO_ITEM = 'TodoItem';
    const TRAINING_COURSE = 'TrainingCourse';
    const TRAINING_EVENT = 'TrainingEvent';
    const TRANSPORTATION_METHOD = 'TransportationMethod';
    const TRIGGER = 'Trigger';
    const TRIP = 'Trip';
    const TRIP_ELIGIBILITY = 'TripEligibility';
    const TRIP_LOCATION = 'TripLocation';
    const TRIP_PARTICIPANT = 'TripParticipant';
    const TRIP_PRICE = 'TripPrice';
    const UI_PARAMS = 'UiParams';
    const UNENROLMENT_REASON = 'UnenrolmentReason';
    const UNIVERSITY = 'University';
    const UNIVERSITY_STAFF = 'UniversityStaff';
    const USAGE_LOG_ENTRY = 'UsageLogEntry';
    const USER = 'User';
    const USER_DEFINED_FIELD = 'UserDefinedField';
    const USER_DEFINED_RECORD = 'UserDefinedRecord';
    const USER_NOTIFICATION = 'UserNotification';
    const USER_ROLE = 'UserRole';
    const USER_ROLE_ASSIGNMENT = 'UserRoleAssignment';
    const VAT_RATE = 'VatRate';
    const VISION_TEST = 'VisionTest';
    const WIDGET = 'Widget';
    const WIDGET_TYPE = 'WidgetType';
    const WORK_PLACEMENT = 'WorkPlacement';
}
