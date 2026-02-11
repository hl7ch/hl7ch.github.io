# Artifacts Summary - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Body Weight Observation](StructureDefinition-ch-emed-epr-observation-body-weight.md) | Definition of the observation for the patient body weight, following the FHIR Vital Signs profile (https://www.hl7.org/fhir/R4/bodyweight.html). |
| [CH EMED EPR Device](StructureDefinition-ch-emed-epr-device.md) | Definition of the device for the eMedication context |
| [CH EMED EPR Medication](StructureDefinition-ch-emed-epr-medication.md) | Definition of the medication |
| [CH EMED EPR Medication (DIS)](StructureDefinition-ch-emed-epr-medication-medicationdispense.md) | Definition of the medication for the medication dispense |
| [CH EMED EPR Organization](StructureDefinition-ch-emed-epr-organization.md) | Definition of the organization for the eMedication context |
| [CH EMED EPR Patient](StructureDefinition-ch-emed-epr-patient.md) | Definition of the patient for the eMedication context |
| [CH EMED EPR Practitioner](StructureDefinition-ch-emed-epr-practitioner.md) | Definition of the practitioner for the eMedication context |
| [CH EMED EPR PractitionerRole](StructureDefinition-ch-emed-epr-practitionerrole.md) | Definition of the practitioner role for the eMedication context |
| [CH EMED EPR RelatedPerson](StructureDefinition-ch-emed-epr-related-person.md) | Definition of the related person for the eMedication context |
| [DIS Composition](StructureDefinition-ch-emed-epr-composition-medicationdispense.md) | Definition of the composition for the medication dispense document |
| [DIS Document](StructureDefinition-ch-emed-epr-document-medicationdispense.md) | Definition of the bundle for the medication dispense document |
| [DIS MedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense.md) | Definition of the medication dispense for the medication dispense document |
| [MTP Composition](StructureDefinition-ch-emed-epr-composition-medicationtreatmentplan.md) | Definition of the composition for the medication treatment plan document |
| [MTP Document](StructureDefinition-ch-emed-epr-document-medicationtreatmentplan.md) | Definition of the bundle for the medication treatment plan document |
| [MTP MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-treatmentplan.md) | Definition of the medication statement for the Medication Treatment Plan document |
| [PADV Changed MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-changed.md) | Definition of the changed medication request for the pharmaceutical advice document |
| [PADV Changed MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed.md) | Definition of the changed medication statement for the pharmaceutical advice document |
| [PADV Composition](StructureDefinition-ch-emed-epr-composition-pharmaceuticaladvice.md) | Definition of the composition for the pharmaceutical advice document |
| [PADV Document](StructureDefinition-ch-emed-epr-document-pharmaceuticaladvice.md) | Definition of the bundle for the pharmaceutical advice document |
| [PADV Observation](StructureDefinition-ch-emed-epr-observation.md) | Definition of the observation for the pharmaceutical advice document |
| [PML Changed Medication Request](StructureDefinition-ch-emed-epr-medication-request-changed-list.md) | Definition of the changed medication request for the medication list document |
| [PML Changed MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed-list.md) | Definition of the changed medication statement for the medication list document |
| [PML Composition](StructureDefinition-ch-emed-epr-composition-medicationlist.md) | Definition of the composition for the medication list document |
| [PML Document](StructureDefinition-ch-emed-epr-document-medicationlist.md) | Definition of the bundle for the medication list document |
| [PML MedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense-list.md) | Definition of the medication dispense for the medication list document |
| [PML MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-list.md) | Definition of the medication request for the medication list document |
| [PML MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-list.md) | Definition of the medication statement for the medication list document |
| [PML Observation](StructureDefinition-ch-emed-epr-observation-list.md) | Definition of the observation for the medication list document |
| [PMLC Composition](StructureDefinition-ch-emed-epr-composition-medicationcard.md) | Definition of the composition for the medication card document |
| [PMLC Document](StructureDefinition-ch-emed-epr-document-medicationcard.md) | Definition of the bundle for the medication card document |
| [PMLC MedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-card.md) | Definition of the aggregated medication statement for the Medication Card document |
| [PRE Composition](StructureDefinition-ch-emed-epr-composition-medicationprescription.md) | Definition of the composition for the medication prescription document |
| [PRE Document](StructureDefinition-ch-emed-epr-document-medicationprescription.md) | Definition of the bundle for the medication prescription document |
| [PRE MedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest.md) | Definition of the medication request for the medication prescription document |

### Structures: Data Type Profiles 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Amount Quantity](StructureDefinition-ch-emed-epr-amount-quantity.md) | A quantity with an amount unit (no time unit) |
| [Amount Range](StructureDefinition-ch-emed-epr-amount-range.md) | A range of amount quantities |
| [Dosage (MedicationRequest)](StructureDefinition-ch-emed-epr-dosage-medicationrequest.md) | Definition of the main dosage element (used in MedicationRequest) |
| [Dosage (MedicationStatement / MedicationDispense)](StructureDefinition-ch-emed-epr-dosage.md) | Definition of the main dosage element (used in MedicationStatement / MedicationDispense) |
| [Dosage Split](StructureDefinition-ch-emed-epr-dosage-split.md) | Definition of the split dosage element |
| [Ratio (Amount / Amount)](StructureDefinition-ch-emed-epr-ratio-amount-per-amount.md) | A ratio of amount per amount |
| [Ratio (Amount / Time)](StructureDefinition-ch-emed-epr-ratio-amount-per-time.md) | A ratio of amount per time |
| [Time Quantity](StructureDefinition-ch-emed-epr-time-quantity.md) | A quantity with a time unit (a duration) |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Amount Quantity Unit Codes](ValueSet-ch-emed-epr-amount-quantity-unit-code.md) | Unit Codes for amount quantity units.These are all unit codes about amount quantities, excluding time units. |
| [Event Timings](ValueSet-ch-emed-epr-event-timing.md) | Event Timings for ambulatory use. |
| [Paper Formats](ValueSet-ch-emed-epr-paper-format.md) | Paper formats for generated original representations. |
| [Route of Administration](ValueSet-ch-emed-epr-route-of-administration.md) | Valueset RouteOfAdministration filtered for ambulatory care use.This value set is a subset of the mandatory value set ([EDQM - RouteOfAdministration](http://fhir.ch/ig/ch-term/ValueSet/edqm-routeofadministration)) that contains only values compatible with ambulatory care. We recommend implementers to focus on supporting this value set instead of the complete one. |
| [Substance Administration Substitution Codes](ValueSet-ch-emed-epr-substance-admin-substitution-code.md) | Codes in use to allow or deny medication substitution. |
| [Time Quantity Unit Codes](ValueSet-ch-emed-epr-time-quantity-unit-code.md) | Unit Codes for time quantity units.These are all unit codes about time quantities, excluding amount units. |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EMED EPR Paper Format Code System](CodeSystem-ch-emed-epr-paper-format-code-system.md) | Possible paper formats that can be delivered by a CH EMED EPR service rendering original representations. |

### Terminology: Naming Systems 

These define identifier and/or code system identities used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EMED EPR - HCI Index CdTyp26 Naming System](NamingSystem-ch-emed-epr-hci-index-cdtyp26-naming-system.md) | Naming System of HCI's CdTyp26 (routes of administration) table. |
| [CH EMED EPR - HCI Index CdTyp9 Naming System](NamingSystem-ch-emed-epr-hci-index-cdtyp9-naming-system.md) | Naming System of HCI's CdTyp9 (unit codes) table. |
| [CH EMED EPR - HUG DTN-IA Naming System](NamingSystem-ch-emed-epr-hug-dtnia-naming-system.md) | Naming System of HUG'S DTN-IA department OID. |
| [CH EMED EPR - PMP-PID Assigning Authority OID dev](NamingSystem-ch-emed-epr-pmp-pid-oid-dev-naming-system.md) | Naming System of the PMP-PID's Assigning Authority OID on development environment. |
| [CH EMED EPR CARA MPI Int Naming System](NamingSystem-ch-emed-epr-emedo-mpi-int-naming-system.md) | Naming System for CARA's MPI assigning authority. |
| [CH EMED EPR CHUV Root Naming System](NamingSystem-ch-emed-epr-chuv-naming-system.md) | Naming System for CHUV root OID. |
| [CH EMED EPR HUG Patient Id Assigning Authority (cert) Naming System](NamingSystem-ch-emed-epr-hug-pid-cert-naming-system.md) | Naming System of HUG's local patient ids in their certification environment, used in the context of CARA's eMedication service's dev and int environments. |
| [CH EMED EPR HUG Patient Id Assigning Authority (dev) Naming System](NamingSystem-ch-emed-epr-hug-pid-dev-naming-system.md) | Naming System of HUG's local patient ids in their development environment, used in the context of CARA's eMedication service's dev and int environments. |
| [CH EMED EPR HUG Patient Id Assigning Authority (form) Naming System](NamingSystem-cch-emed-epr-hug-pid-form-naming-system.md) | Naming System of HUG's local patient ids in their training environment (formation), used in the context of CARA's eMedication service's dev and int environments. |
| [CH EMED EPR HUG Patient Id Assigning Authority (prod) Naming System](NamingSystem-ch-emed-epr-hug-pid-prod-naming-system.md) | Naming System of HUG's local patient ids in their production environment, used in the context of CARA's eMedication service's prod environment. |
| [CH EMED EPR HUG Root Naming System](NamingSystem-ch-emed-epr-hug-root-naming-system.md) | Naming System for HUG root OID. |
| [CH EMED EPR HUG eHealth domain Naming System](NamingSystem-ch-emed-epr-hug-ehealth-naming-system.md) | Naming System of HUG's eHealth domain OID. |

### Terminology: Concept Maps 

These define transformations to convert between codes by systems conforming with this implementation guide.

| | |
| :--- | :--- |
| [CHEMEDEPRAmountQuantityUnitCode -> CdTyp9](ConceptMap-CHEMEDEPRAmountQuantityUnitCodeToCdTyp9.md) | Mapping from CHEMEDEPRAmountQuantityUnitCode codes to HCI CdTyp9 unit codes. |
| [CHEMEDEPRTimeQuantityUnitCode -> CdTyp9](ConceptMap-CHEMEDEPRTimeQuantityUnitCodeToCdTyp9.md) | Mapping from CHEMEDEPRTimeQuantityUnitCode codes to HCI CdTyp9 unit codes. |
| [CdTyp26 -> RouteOfAdministrationEDQM](ConceptMap-CdTyp26ToRouteOfAdministrationEDQM.md) | Mapping from HCI CdTyp26 route of administration codes to RouteOfAdministrationEDQM codes. |
| [CdTyp9 -> CHEMEDEPRAmountQuantityUnitCode](ConceptMap-CdTyp9ToCHEMEDEPRAmountQuantityUnitCode.md) | Mapping from HCI CdTyp9 unit codes to CHEMEDEPRAmountQuantityUnitCode codes. |
| [CdTyp9 -> CHEMEDEPRTimeQuantityUnitCode](ConceptMap-CdTyp9ToCHEMEDEPRTimeQuantityUnitCode.md) | Mapping from HCI CdTyp9 unit codes to CHEMEDEPRTimeQuantityUnitCode codes. |
| [RouteOfAdministrationEDQM -> CdTyp26](ConceptMap-RouteOfAdministrationEDQMToCdTyp26.md) | Mapping from RouteOfAdministrationEDQM route of administration codes to HCI CdTyp26 codes. |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [Bundle: DIS 1](Bundle-DocumentDis1.md) | An example of a dispense document bundle. |
| [Bundle: DIS for a self-medicating dafalgan treatment.](Bundle-DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription.md) | Example of a document bundle of type DIS, documenting the dispensation of a box of effervescent dafalgan for a self-medicating treatment to patient CARAPMP004. |
| [Bundle: MTP 1](Bundle-DocumentMtp1.md) | The example of a Bundle for a MTP document |
| [Bundle: MTP Dafalgan Effervescent CARAPMP004](Bundle-DocumentMtpParacetamolDafalganCARAPMP004.md) | MTP for Dafalgan effervescent paracetamol treatment for patient CARAPMP004 |
| [Bundle: MTP Paracetamol CARAPMP004](Bundle-DocumentMtpParacetamolCARAPMP004.md) | Initial MTP for paracetamol treatment for patient CARAPMP004 |
| [Bundle: MTP for Marcoumar tabs 3mg with free text dosage](Bundle-DocumentMtpCARAPMP004MarcoumarFreeTextDosage.md) | Example of an MTP bundle for Marcoumar treatment with free text dosage instructions. |
| [Bundle: MTP for no branded ibuprofen.](Bundle-DocumentUCSF6CARAPMP004MTPIbuprofen.md) | Example of a document bundle for an ibuprofen treatment (in reserve) without commercial product details. |
| [Bundle: MTP for self-medicating paracetamol.](Bundle-DocumentUCSF2CARAPMP004MTPParacetamol.md) | Example of a document bundle for a patient adding a medication treatment plan for self-medication with paracetamol. |
| [Bundle: PADV 1](Bundle-DocumentPadv1.md) | The example of a Bundle for a PADV CHANGE document |
| [Bundle: PADV 2](Bundle-DocumentPadv2.md) | The example of a Bundle for a PADV CHANGE document targetting a PRE document. |
| [Bundle: PADV CANCEL paracetamol Axapharm](Bundle-DocumentPadvCancelParacetamolCARAPMP004.md) | The example of a Bundle for a PADV CANCEL document for paracetamol Axapharm 1g for patient CARAPMP004 |
| [Bundle: PADV CHANGE paracetamol Axapharm](Bundle-DocumentPadvChangeParacetamolCARAPMP004.md) | The example of a Bundle for a PADV CHANGE document for replacing a previous PRE of paracetamol Axapharm 1g for patient CARAPMP004 with Dafalgan eff. |
| [Bundle: PML #1](Bundle-BundlePml1.md) | PML bundle example |
| [Bundle: PMLC document with a prescribed axapharm paracetamol treatment](Bundle-DocumentPmlcCARAPMP004AxapharmParacetamol.md) | Example of PMLC document with a prescribed axapharm paracetamol treatment |
| [Bundle: PMLC document with a prescribed dafalgan effervescent paracetamol treatment](Bundle-DocumentPmlcCARAPMP004DafalganEffParacetamol.md) | Example of PMLC document with a prescribed dafalgan effervescent paracetamol treatment |
| [Bundle: PMLC document with no treatments](Bundle-DocumentUCSF1CARAPMP004PMLCEmpty.md) | Example of PMLC document for a patient without any active treatments. |
| [Bundle: PMLC #1](Bundle-BundlePmlc1.md) | PMLC bundle example |
| [Bundle: PMLC document with Dafalgan self-medication](Bundle-DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication.md) | Example of a PMLC bundle with a single treatment of self-medication with Dafalgan (paracetamol). |
| [Bundle: PMLC document with Dafalgan self-medication](Bundle-DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication.md) | Example of a PMLC bundle with a single treatment of self-medication with Dafalgan (paracetamol) after dispensation. |
| [Bundle: PRE 1](Bundle-DocumentPre1.md) | An example of a prescription document bundle. |
| [Bundle: PRE Dafalgan eff 500mg](Bundle-DocumentPreParacetamolDafalganCARAPMP004.md) | New PRE for paracetamol treatment for patient CARAPMP004 with Dafalgan effervescent tablets 500mg. |
| [Bundle: PRE Dafalgan eff 500mg](Bundle-DocumentUCSF7CARAPMP004PREDafalgan.md) | New PRE for paracetamol self-medication of patient CARAPMP004 with Dafalgan effervescent tablets 500mg. |
| [Bundle: PRE Marcoumar tabs 3mg with alternating dosage](Bundle-DocumentPreCARAPMP004MarcoumarFreeTextDosage.md) | New PRE for Marcoumar tabs 3mg |
| [Bundle: PRE Paracetamol Axapharm 1g](Bundle-DocumentPreParacetamolAxapharmCARAPMP004.md) | Initial PRE for paracetamol treatment for patient CARAPMP004. |
| [Bundle: use case PML #1](Bundle-BundleUtc1Pml.md) | PML pre-examination for patient CARAPMP004. No previous treatments, empty medication list. |
| [Bundle: use case PML #6b](Bundle-BundleUtc6bPml.md) | Post PADV-CHANGE PML for patient CARAPMP004. |
| [Changed Medication Statement: Triatec (PADV)](MedicationStatement-MedicationStatementTriatecPadv.md) | The example of an changed medication statement for a PADV document |
| [Composition: use case PML #1](Composition-Inline-composition-for-utc-1-pml.md) | Composition for PML document for pre-examination for patient CARAPMP004. No previous treatments, empty medication list. |
| [Composition: use case PML #6b](Composition-Inline-composition-for-utc-6b-pml.md) | Composition for PML document for post PADV-CHANGE PML for patient CARAPMP004. |
| [Device: PMP Aggregator](Device-DevicePmp.md) | Example device resource for the aggregator |
| [Medication: Triatec](Medication-MedicationTriatec.md) | The example of the Triatec medication |
| [MedicationDispense: Dafalgan self-medication](MedicationDispense-MedicationDispenseUSCF4DafalganDis.md) | Example of a medication dispense in a DIS document for a dafalgan self-medication MTP. |
| [MedicationDispense: Triatec (DIS)](MedicationDispense-MedicationDispenseTriatecDis.md) | Example of a medication dispense in a DIS document. |
| [MedicationDispense: Triatec (PML)](MedicationDispense-MedicationDispenseTriatecPml.md) | Example of a medication dispense in a PML document. |
| [MedicationIbuprofen](Medication-MedicationIbuprofen.md) | Medication example for ibuprofen medication without any specific commercial product details. |
| [MedicationMarcoumar](Medication-MedicationMarcoumar.md) | Medication example for Marcoumar tablets 3mg - no article details |
| [MedicationMarcoumar25TabsPackage](Medication-MedicationMarcoumar25TabsPackage.md) | Medication example for Marcoumar tablets 3mg, package of 25 tablets |
| [MedicationNorvasc](Medication-MedicationNorvasc.md) | Example for a medication (Norvasc) |
| [MedicationParacetamolAxapharm](Medication-MedicationParacetamolAxapharm.md) | Example for Axapharm paracetamol tablets 1g |
| [MedicationParacetamolDafalganEff](Medication-MedicationParacetamolDafalganEff.md) | Example for Dafalgan paracetamol effervescent tablets 500mg |
| [MedicationRamipril](Medication-MedicationRamipril.md) | Medication example for Ramipril Mepha cpr 2.5mg |
| [MedicationRequest: Dafalgan effervescent 500mg (PRE)](MedicationRequest-MedicationRequestDafalganEffPre.md) | Example of a medication request in a PRE document for paracetamol Dafalgan effervescent tablets 500mg. |
| [MedicationRequest: Dafalgan effervescent 500mg (PRE)](MedicationRequest-MedicationRequestDafalganEffSelfMedicationPre.md) | Example of a medication request in a PRE document for paracetamol Dafalgan effervescent tablets 500mg for a treatment added by a patient. |
| [MedicationRequest: Ibuprofen no branded details (PRE)](MedicationRequest-MedicationRequestIbuprofenPre.md) | Example of a medication request in a PRE document for ibuprofen without any specific commercial product details. |
| [MedicationRequest: Marcoumar 3mg tabs free text dosage](MedicationRequest-MedicationRequestMarcoumarPre.md) | Example of a medication request for Marcoumar 3mg tabs with free text dosage. |
| [MedicationRequest: Paracetamol Axapharm 1g (PML)](MedicationRequest-MedicationRequestParacetamolAxapharmPml.md) | Example of a medication request from a PRE document for paracetamol Axapharm tablet 1g, conveyed within a PML document. |
| [MedicationRequest: Paracetamol Axapharm 1g (PRE)](MedicationRequest-MedicationRequestParacetamolAxapharmPre.md) | Example of a medication request in a PRE document for paracetamol Axapharm tablet 1g. |
| [MedicationRequest: Triatec (PML)](MedicationRequest-MedicationRequestTriatecPml.md) | Example of a medication request in a PML document. |
| [MedicationRequest: Triatec (PRE)](MedicationRequest-MedicationRequestTriatecPre.md) | Example of a medication request in a PRE document. |
| [MedicationStatement: Marcoumar cpr 3mg](MedicationStatement-MedicationStatementMarcoumarFreeTextDosage.md) | Example of a medication statement for a branded product (no packaging specified) Marcoumar tabs 3mg with free text dosage |
| [MedicationStatement: Paracetamol Axapharm (MTP)](MedicationStatement-MedicationStatementParacetamolAxapharmMtp.md) | The example of a medication statement for a medication treatment plan for Axapharm paracetamol |
| [MedicationStatement: Paracetamol Axapharm (PML)](MedicationStatement-MedicationStatementParacetamolAxapharmPml.md) | The example of a medication statement for a medication treatment plan for Axapharm paracetamol conveyed within a PML document |
| [MedicationStatement: Paracetamol Axapharm (PMLC)](MedicationStatement-MedicationStatementParacetamolAxapharmPmlc.md) | The example of a medication statement for a medication card with a single Axapharm paracetamol treatment |
| [MedicationStatement: Paracetamol Dafalgan Effervescent (MTP)](MedicationStatement-MedicationStatementParacetamolDafalganEffMtp.md) | The example of a medication statement for a medication treatment plan for Dafalgan effervescent paracetamol |
| [MedicationStatement: Paracetamol Dafalgan Effervescent (MTP) with max dose per period](MedicationStatement-MedicationStatementDafalganEffMaxDosePerPeriod.md) | The example for a medication statement with a max. dose per period. |
| [MedicationStatement: Paracetamol Dafalgan Effervescent (MTP) with split dose](MedicationStatement-MedicationStatementDafalganEffSplitDose.md) | The example for a medication statement with split dose. |
| [MedicationStatement: Paracetamol Dafalgan Effervescent (PMLC)](MedicationStatement-MedicationStatementParacetamolDafalganEffPmlc.md) | The example of a medication statement for a medication card with a single Dafalgan effervescent paracetamol treatment. |
| [MedicationStatement: Triatec (MTP)](MedicationStatement-MedicationStatementTriatecMtp.md) | The example of a medication statement in a MTP document |
| [MedicationStatement: ibuprofen, no brand](MedicationStatement-MedicationStatementIbuprofenNoBrand.md) | The example of a medication statement for an ibuprofen treatment plan, without specifying commercial brand details. |
| [MedicationStatement: self-medication paracetamol treatment](MedicationStatement-MedicationStatementParacetamolSelfMedication.md) | The example for a self-medication treatment plan for paracetamol. |
| [MedicationStatementCard: self-medication paracetamol treatment](MedicationStatement-MedicationStatementCardParacetamolSelfMedication.md) | The example for a self-medication treatment plan for paracetamol, conveyed within a PMLC document. |
| [MedicationStatementCard: self-medication paracetamol treatment after dispense.](MedicationStatement-MedicationStatementCardParacetamolSelfMedicationAfterDispense.md) | The example for a self-medication treatment plan for paracetamol after a dispense, conveyed within a PMLC document. |
| [MedicationWithATC](Medication-MedicationWithATC.md) | Example for a medication with ATC code (NaraDex) |
| [MedicationWithTwoIngredients](Medication-MedicationWithTwoIngredients.md) | Example for a medication with two ingredients (Exforge) |
| [Observation: CANCEL of Axapharm paracetamol treatment.](Observation-ObservationParacetamolAxapharmPrePadvCancel.md) | The example for che cancellation of an Axapharm paracetamol treatment via a PADV CANCEL document. |
| [Observation: CHANGE of Axapharm paracetamol prescription, replaced with Dafalgan eff.](Observation-ObservationParacetamolAxapharmPrePadvChange.md) | The example for che change of an Axapharm paracetamol prescription via a PADV CHANGE document. |
| [Observation: CHANGE of Axapharm paracetamol prescription, replaced with Dafalgan eff.](Observation-ObservationParacetamolAxapharmPrePadvChangePml.md) | The example for che change of an Axapharm paracetamol prescription via a PADV CHANGE document, conveyed in a PML document. |
| [Observation: Ramipril (PADV)](Observation-ObservationRamiprilPadv.md) | The example of an observation for a change in a PADV document targetting a PRE document. |
| [Observation: Triatec (PADV)](Observation-ObservationTriatecPadv.md) | The example of an observation for a change in a PADV document |
| [Observation: Triatec (PML)](Observation-ObservationTriatecPml.md) | The example of an observation for a change in a PML document |
| [Organization: CARA](Organization-OrganizationCara.md) | Organization example (CARA) |
| [Organization: HUG](Organization-OrganizationHug.md) | The example of the HUG organization |
| [Organization: Pharma SI](Organization-OrganizationPharmaSI.md) | The example of pharmacy organization. |
| [Patient: Dupont](Patient-PatientDupont.md) | A simple example of a patient |
| [Patient: Michaël Christopher KARCE](Patient-PatientCARAPMP004.md) | Patient CARAPMP004 |
| [Pharmacist: John Doe](Practitioner-PharmacistDoe.md) | The example of a pharmacist |
| [Practitioner: Perry Cox](Practitioner-PractitionerCox.md) | The example of a practitioner |
| [PractitionerRole: John Doe @ PharmaSI](PractitionerRole-PractitionerRoleDoeAtPharmaSI.md) | The example of a pharmacist practitioner role, linking a pharmacist (practitioner) to a pharmacy example organization. |
| [PractitionerRole: Perry Cox @ HUG](PractitionerRole-PractitionerRoleCoxAtHug.md) | The example of a practitioner role, linking a practitioner to an organization |

