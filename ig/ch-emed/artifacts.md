# Artifacts Summary - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EMED Medication](StructureDefinition-ch-emed-medication.md) | Definition of the medication |
| [CH EMED Medication (MedicationDispense)](StructureDefinition-ch-emed-medication-medicationdispense.md) | Definition of the medication for the medication dispense |
| [CH EMED Medication Card Composition](StructureDefinition-ch-emed-composition-medicationcard.md) | Definition of the composition for the medication card document |
| [CH EMED Medication Card Document](StructureDefinition-ch-emed-document-medicationcard.md) | Definition of the bundle for the medication card document |
| [CH EMED Medication Dispense Composition](StructureDefinition-ch-emed-composition-medicationdispense.md) | Definition of the composition for the medication dispense document |
| [CH EMED Medication Dispense Document](StructureDefinition-ch-emed-document-medicationdispense.md) | Definition of the bundle for the medication dispense document |
| [CH EMED Medication List Composition](StructureDefinition-ch-emed-composition-medicationlist.md) | Definition of the composition for the medication list document |
| [CH EMED Medication List Document](StructureDefinition-ch-emed-document-medicationlist.md) | Definition of the bundle for the medication list document |
| [CH EMED Medication Prescription Composition](StructureDefinition-ch-emed-composition-medicationprescription.md) | Definition of the composition for the medication prescription document |
| [CH EMED Medication Prescription Document](StructureDefinition-ch-emed-document-medicationprescription.md) | Definition of the bundle for the medication prescription document |
| [CH EMED Medication Treatment Plan Composition](StructureDefinition-ch-emed-composition-medicationtreatmentplan.md) | Definition of the composition for the medication treatment plan document |
| [CH EMED Medication Treatment Plan Document](StructureDefinition-ch-emed-document-medicationtreatmentplan.md) | Definition of the bundle for the medication treatment plan document |
| [CH EMED MedicationAdministration (DIS)](StructureDefinition-ch-emed-medicationadministration.md) | Definition of the medication administration for the medication dispense document |
| [CH EMED MedicationAdministration (LIST)](StructureDefinition-ch-emed-medicationadministration-list.md) | Definition of the medication administration for the medication list document |
| [CH EMED MedicationDispense (DIS)](StructureDefinition-ch-emed-medicationdispense.md) | Definition of the medication dispense for the medication dispense document |
| [CH EMED MedicationDispense (LIST)](StructureDefinition-ch-emed-medicationdispense-list.md) | Definition of the medication dispense for the medication list document |
| [CH EMED MedicationRequest (LIST)](StructureDefinition-ch-emed-medicationrequest-list.md) | Definition of the medication request for the medication list document |
| [CH EMED MedicationRequest (PRE)](StructureDefinition-ch-emed-medicationrequest.md) | Definition of the medication request for the medication prescription document |
| [CH EMED MedicationRequest Changed](StructureDefinition-ch-emed-medicationrequest-changed.md) | Definition of the changed medication request for the pharmaceutical advice document |
| [CH EMED MedicationRequest Changed (LIST)](StructureDefinition-ch-emed-medicationrequest-changed-list.md) | Definition of the changed medication request for the medication list document |
| [CH EMED MedicationStatement](StructureDefinition-ch-emed-medicationstatement.md) | Definition of the medication statement for the medication treatment plan document (and as basis medication statement) |
| [CH EMED MedicationStatement (CARD)](StructureDefinition-ch-emed-medicationstatement-card.md) | Definition of the medication statement for the medication card document |
| [CH EMED MedicationStatement (LIST)](StructureDefinition-ch-emed-medicationstatement-list.md) | Definition of the medication statement for the medication list document |
| [CH EMED MedicationStatement Changed](StructureDefinition-ch-emed-medicationstatement-changed.md) | Definition of the changed medication statement for the pharmaceutical advice document |
| [CH EMED MedicationStatement Changed (LIST)](StructureDefinition-ch-emed-medicationstatement-changed-list.md) | Definition of the changed medication statement for the medication list document |
| [CH EMED Observation (LIST)](StructureDefinition-ch-emed-observation-list.md) | Definition of the observation for the medication list document |
| [CH EMED Observation (PADV)](StructureDefinition-ch-emed-observation.md) | Definition of the observation for the pharmaceutical advice document |
| [CH EMED Organization](StructureDefinition-ch-emed-organization.md) | Definition of the organization for the eMedication context |
| [CH EMED Pharmaceutical Advice Composition](StructureDefinition-ch-emed-composition-pharmaceuticaladvice.md) | Definition of the composition for the pharmaceutical advice document |
| [CH EMED Pharmaceutical Advice Document](StructureDefinition-ch-emed-document-pharmaceuticaladvice.md) | Definition of the bundle for the pharmaceutical advice document |
| [CH EMED Practitioner](StructureDefinition-ch-emed-practitioner.md) | Definition of the practitioner for the eMedication context |
| [CH EMED PractitionerRole](StructureDefinition-ch-emed-practitionerrole.md) | Definition of the practitioner role for the eMedication context |

### Structures: Data Type Profiles 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EMED Dosage (MedicationRequest)](StructureDefinition-ch-emed-dosage-medicationrequest.md) | Definition of the dosage (used in MedicationRequest) |
| [CH EMED Dosage (MedicationStatement / MedicationDispense)](StructureDefinition-ch-emed-dosage.md) | Definition of the dosage (used in MedicationStatement / MedicationDispense) |
| [CH EMED Dosage Split](StructureDefinition-ch-emed-dosage-split.md) | Definition of the split dosage (used in MedicationStatement / MedicationDispense / MedicationRequest) |
| [CH EMED UUID Identifier](StructureDefinition-ch-emed-uuid-identifier.md) | An Identifier profile enforcing CH EMED rules for UUID-based identifiers.* `system` SHALL be `urn:ietf:rfc:3986`
* `value` SHALL be a UUID in URN format (`urn:uuid:[uuid]`)
See also[Relationship between Documents](relationship-between-documents.md#identifier-format)for more information. |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EMED Extension Dispense](StructureDefinition-ch-emed-ext-dispense.md) | Extension to reference an external MedicationDispense/MedicationAdministration and the Medication Dispense document that contains it |
| [CH EMED Extension Last Considered Document](StructureDefinition-ch-emed-ext-last-considered-document.md) | Extension including the identifier of the last considered document for consolidating this MedicationStatement. |
| [CH EMED Extension MedicationRequest Changed](StructureDefinition-ch-emed-ext-medicationrequest-changed.md) | Extension to represent the changed MedicationRequest |
| [CH EMED Extension MedicationStatement Changed](StructureDefinition-ch-emed-ext-medicationstatement-changed.md) | Extension to represent the changed MedicationStatement |
| [CH EMED Extension Pharmaceutical Advice](StructureDefinition-ch-emed-ext-pharmaceuticaladvice.md) | Extension to reference an external Observation and the Pharmaceutical Advice document that contains it |
| [CH EMED Extension Prescription](StructureDefinition-ch-emed-ext-prescription.md) | Extension to reference an external MedicationRequest and the Medication Prescription document that contains it |
| [CH EMED Extension Treatment Plan](StructureDefinition-ch-emed-ext-treatmentplan.md) | Extension to reference an external MedicationStatement and the Medication Treatment Plan document that contains it |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [1-1 Composition for Medication Treatment Plan document](Composition-1-1-Composition.md) | Example for Composition - Use case step 1-1: First entry (including header information, section(s) and references) in the MTP document. |
| [1-1 Medication Statement with Medication Triatec](MedicationStatement-1-1-MedStatTriatec.md) | Example for MedicationStatement (MTP) - Use case step 1-1: The record of the medication Triatec, to be taken by Monika Wegmüller in the future. |
| [1-1 Medication Treatment Plan document](Bundle-1-1-MedicationTreatmentPlan.md) | Example for Bundle - Use case step 1-1: Decision for Triatec as medication treatment for Monika Wegmüller. |
| [1-2 Composition for Medication Dispense document](Composition-1-2-Composition.md) | Example for Composition - Use case step 1-2: First entry (including header information, section(s) and references) in the DIS document. |
| [1-2 Medication Dispense document](Bundle-1-2-MedicationDispense.md) | Example for Bundle - Use case step 1-2: Medication dispense of Triatec to Monika Wegmüller. |
| [1-2 Medication Dispense with Medication Beloc Zok](MedicationDispense-2-4-MedDispBeloczok.md) | Example for MedicationDispense (DIS) - Use case step 2-4: The record of the supply of Beloc Zok. |
| [1-2 Medication Dispense with Medication Triatec](MedicationDispense-1-2-MedDispTriatec.md) | Example for MedicationDispense (DIS) - Use case step 1-1: The record of the supply of Triatec. |
| [2-1 Composition for Medication List document](Composition-2-1-Composition.md) | Example for Composition - Use case step 2-1: First entry (including header information, section(s) and references) in the LIST document. |
| [2-1 Medication Dispense with Medication Triatec](MedicationDispense-2-1-MedDispTriatec.md) | Example for MedicationDispense (LIST) - Use case step 2-1: Entry in the dynamically generated medication list for Monika Wegmüller. |
| [2-1 Medication List document](Bundle-2-1-MedicationList.md) | Example for Bundle - Use case step 2-1: Dynamically generated medication list for Monika Wegmüller. |
| [2-1 Medication Statement with Medication Triatec](MedicationStatement-2-1-MedStatTriatec.md) | Example for MedicationStatement (LIST) - Use case step 2-1: Entry in the dynamically generated medication list for Monika Wegmüller. |
| [2-2 Composition for Pharmaceutical Advice document](Composition-2-2-Composition.md) | Example for Composition - Use case step 2-2: First entry (including header information, section(s) and references) in the PADV document. |
| [2-2 Observation for Pharmaceutical Advice document](Observation-2-2-ObsPharmaceuticalAdvice.md) | Example for Observation (PADV) - Use case step 2-2: Cancellation of Triatec due to undesired side effects. |
| [2-2 Pharmaceutical Advice document](Bundle-2-2-PharmaceuticalAdvice.md) | Example for Bundle - Use case step 2-2: Cancellation of medication with Triatec due to undesired side effects of the active ingredient Ramipril. |
| [2-3 Composition for Medication Treatment Plan document](Composition-2-3-Composition.md) | Example for Composition - Use case step 2-3: First entry (including header information, section(s) and references) in the MTP document. |
| [2-3 Medication Statement with Medication Beloc Zok](MedicationStatement-2-3-MedStatBeloczok.md) | Example for MedicationStatement (MTP) - Use case step 2-3: The record of the medication Beloc Zok, to be taken by Monika Wegmüller in the future. |
| [2-3 Medication Treatment Plan document](Bundle-2-3-MedicationTreatmentPlan.md) | Example for Bundle - Use case step 2-3: Decistion for Beloc Zok as new medication treatment for Monika Wegmüller. |
| [2-4 Composition for Medication Dispense document](Composition-2-4-Composition.md) | Example for Composition - Use case step 2-4: First entry (including header information, section(s) and references) in the DIS document. |
| [2-4 Medication Dispense document](Bundle-2-4-MedicationDispense.md) | Example for Bundle - Use case step 2-4: Medication dispense of Beloc Zok to Monika Wegmüller. |
| [2-5 Composition for Medication Treatment Plan document](Composition-2-5-Composition.md) | Example for Composition - Use case step 2-5: First entry (including header information, section(s) and references) in the MTP document. The authors of the document are represented as person and device. |
| [2-5 Medication Statement with Medication Norvasc](MedicationStatement-2-5-MedStatNorvasc.md) | Example for MedicationStatement (MTP) - Use case step 2-5: The record of the medication Norvasc, to be taken by Monika Wegmüller in the future. |
| [2-5 Medication Treatment Plan document](Bundle-2-5-MedicationTreatmentPlan.md) | Example for Bundle - Use case step 2-5: Decistion for Norvasc as new medication treatment for Monika Wegmüller. |
| [2-6 Medication Prescription document](Bundle-2-6-MedicationPrescription.md) | Example for Bundle - Use case 2-6: Prescription for Belok Zok for Monika Wegmüller. |
| [2-6 Medication Request with Medication Norvasc](MedicationRequest-2-6-MedReqNorvasc.md) | Example for MedicationRequest (PRE) - Use case step 2-6: The order for the supply of Norvasc. |
| [2-6 PDF as original representation of the Medication Prescription document](Binary-2-6-pdf.md) | Example for Binary - Use case step 2-6: Original representation (PDF) in the PRE document. |
| [2-7 Medication Card document](Bundle-2-7-MedicationCard.md) | Example for Bundle - Use case step 2-7: Medication plan for Monika Wegmüller, created by her general practitioner. The 'fullUrl' elements of the entries and the references use absolute URLs. |
| [2-7 Medication Card document (with references/fullUrls as UUIDs)](Bundle-2-7-MedicationCard-UUIDfullUrl.md) | Example for Bundle - Use case step 2-7: Medication plan for Monika Wegmüller, created by her general practitioner. The 'fullUrl' elements of the entries and the references use UUIDs. |
| [2-7 Medication Statement with Medication Beloc Zok](MedicationStatement-2-7-MedStatBeloczok.md) | Example for MedicationStatement (CARD) - Use case step 2-7: The record of Beloc Zok as part of the current medication of Monika Wegmüller. |
| [2-7 Medication Statement with Medication Norvasc](MedicationStatement-2-7-MedStatNorvasc.md) | Example for MedicationStatement (CARD) - Use case step 2-7: The record of Norvasc as part of the current medication of Monika Wegmüller. |
| [2-7 PDF as original representation of the Medication Card document](Binary-2-7-pdf.md) | Example for Binary - Use case step 2-7: Original representation (PDF) in the CARD document. |
| [3-1 Composition for Medication Dispense document](Composition-3-1-Composition.md) | Example for Composition - Use case step 3-1: First entry (including header information, section(s) and references) in the DIS document. |
| [3-1 Medication Dispense document](Bundle-3-1-MedicationDispense.md) | Example for Bundle - Use case step 3-1: Documentation of the medication administration of NaCl to Max Moser. |
| [3-2 Composition for Medication Dispense document](Composition-3-2-Composition.md) | Example for Composition - Use case step 3-3: First entry (including header information, section(s) and references) in the DIS document. |
| [3-2 Medication Dispense document](Bundle-3-2-MedicationDispense.md) | Example for Bundle - Use case step 3-2: Documentation of the medication administration of Fentanyl to Max Moser. |
| [Composition - Change Dosage](Composition-Comp-ChangeDosage.md) | Example for Composition - First entry (including header information, section(s) and references) in the PADV document with a dosage change. |
| [Example Device](Device-ExampleDevice.md) | Example for Device - A device as (one of the) author(s) of a document. |
| [Familien Hausarzt](Practitioner-FamilienHausarzt.md) | Example for Practitioner - Use case steps 1.x-2.x: General practitioner with a GLN. |
| [Familien Hausarzt @ Hausarzt](PractitionerRole-FamilienHausarztAtHausarzt.md) | Example for PractitionerRole - Use case steps 1.x-2.x: Representing the relationship between 'Familien Hausarzt' (practitioner) and 'Hausarzt' (organization). |
| [Hausarzt](Organization-Hausarzt.md) | Example for Organization - Use case steps 1.x-2.x: Organization with a GLN and the address. |
| [Max Moser](Patient-MaxMoser.md) | Example for Patient - Use case steps 3.x: Male patient with a local patient identifier, date of birth and address. |
| [Medication Administration Fentanyl](MedicationAdministration-3-2-MedAdminFentanyl.md) | Example for MedicationAdministration (DIS) - Use case step 3-2: The record of the administration (consumation) of Fentanyl. |
| [Medication Administration NaCL](MedicationAdministration-3-1-MedAdminNacl.md) | Example for MedicationAdministration (DIS) - Use case step 3-1: The record of the administration (consumation) of NaCL. |
| [Medication Dispense was not substituted](MedicationDispense-MedDispTriatec-WasNotSubstituted.md) | Example for MedicationDispense (DIS) - Triatec with the explicit statement, that is was NOT substituted. |
| [Medication Dispense was substituted](MedicationDispense-MedDispTriatec-WasSubstituted.md) | Example for MedicationDispense (DIS) - Triatec with the statement, that is was substituted. |
| [Medication Request - Changed Medication](MedicationRequest-MedReq-ChangeMedication.md) | Example for MedicationRequest - A new MedicationRequest with the new medication. It is referenced from Observation (PADV 'CHANGE') which includes the note to the change and it references the Observation itself. |
| [Medication Request - Complex Dosage](MedicationRequest-MedReq-ComplexDosage.md) | Example for MedicationRequest - Order for the supply of Wallwurz Gel with a complex dosage (free text), as a reserve medication and without timing information. |
| [Medication Statement with NOT recommended timing codes](MedicationStatement-NotRecommendedTimingCodes.md) | Example for MedicationStatment - Norvasc with NOT recommended timing codes. |
| [Medication Statement with a medication in reserve and a maximum dosage](MedicationStatement-AsNeededWithMaxDose.md) | Example for MedicationStatment - Nitrostat with the dosage instruction: 'Take 1 tablet as needed for chest pain, maximum 3 tablets in 15 minutes'. |
| [Medication Statement with changed dosage](MedicationStatement-MedStatTriatec-ChangeDosage.md) | Example for MedicationStatment - A new MedicationStatement with the a new dosage. It is referenced from the Observation (PADV 'CHANGE') which includes the note to the change and it references the Observation itself. |
| [Medication with 2 ingredients](Medication-MedicationWithTwoIngredients.md) | Example for Medication - Exforge with the two ingredients Amlodipine and Valsartan. |
| [Medication with ATC](Medication-MedicationWithATC.md) | Example for Medication - NaraDex as a foreign product (non-Swiss) and therefore using the ATC code. |
| [Monika Wegmueller](Patient-MonikaWegmueller.md) | Example for Patient - Use case steps 1.x-2.x: Female patient with a local patient identifier, date of birth and address. |
| [Observation for Pharmaceutical Advice document](Observation-Obs-ChangeDosage.md) | Example for Observation (PADV) - CHANGE with new MedicationStatement (change in dosage: 1 tablet in the morning instead of 0.5 tablet). |
| [Observation for Pharmaceutical Advice document](Observation-PharmaceuticalAdvice-ChangeMedicament.md) | Example for Observation (PADV) - CHANGE with new MedicationRequest (generic medication: Amlodipine instead of Norvasc). |
| [Pharmaceutical Advice document to change the dosage](Bundle-PharmaceuticalAdvice-ChangeDosage.md) | Example for Bundle - Documentation of a dosage change (1 tablet in the morning instead of 0.5 tablet) for the medication Triatec. |
| [Priska Huber](Practitioner-PriskaHuber.md) | Example for Practitioner - Use case steps 3.x: Paramedic with a GLN. |
| [Priska Huber @ Rettungsdienst](PractitionerRole-PriskaHuberAtRettungsdienst.md) | Example for PractitionerRole - Use case steps 3.x: Representing the relationship between 'Priska Huber' (practitioner) and 'Rettungsdienst' (organization). |
| [Rettungsdienst](Organization-Rettungsdienst.md) | Example for Organization - Use case steps 3.x: Organization with a GLN and the address. |
| [Triatec with code not from VS](Medication-TriatecWithCodeNotFromVS.md) | Example for Medication - Triatec with an ingredient code (SCT), which is NOT included in the SCT-VS which has an extensible binding. |
| [Triatec with local codes](Medication-TriatecWithLocalCodes.md) | Example for Medication - Triatec with the defined GTIN and a local medication code. |

