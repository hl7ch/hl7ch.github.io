# Home - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/ImplementationGuide/ch.fhir.ig.ch-epreg | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CH_EPREG |
| **Copyright/Legal**: CC0-1.0 | |

### Introduction

The **pregnancy passport** contains all the important medical information needed during pregnancy, at birth and for six weeks afterwards to ensure comprehensive care. This information is entered in the pregnancy passport by the treating healthcare providers, such as gynecologists, midwives and general practitioners, as well as institutions such as clinics, birthing centres, practices or midwife organizations.

The CH EPREG implementation guide (IG) describes the FHIR representation of the **e**lectronic **preg**nancy passport in Switzerland. It is dependent on [CH Core](http://fhir.ch/ig/ch-core/index.html) and [CH Term](http://fhir.ch/ig/ch-term/index.html), which describe the Swiss-specific context. CH EPREG follows the [Swiss layered approach to FHIR interoperability](http://fhir.ch/ig/ch-core/usage-swiss-core-artifacts.html), which promotes the reuse of common core artifacts across different exchange formats. Like other Swiss exchange format IGs such as CH EMED (medication) and CH VACD (vaccination), CH EPREG leverages core clinical profiles where relevant to pregnancy care, ensuring consistency across Swiss healthcare documentation while applying pregnancy-specific constraints where needed.

The pregnancy passport represents a snapshot of pregnancy-related information at a specific point in time and can be stored in the Electronic Patient Record (EPR). The consolidation and update processes for incorporating data from multiple encounters and sources are not within the scope of this implementation guide. Different approaches to handling these processes are described in the concept paper.

This implementation guide is based on the concept for the exchange format of the electronic pregnancy passport ([de](https://www.e-health-suisse.ch/upload/documents/eSchwangerschaftspass_Konzept_de.pdf), [fr](https://www.e-health-suisse.ch/upload/documents/eDossiergrossesse_Concept_fr.pdf)).

[Changelog](changelog.md) with significant changes, open and closed issues.

Please note that not all data elements from the concept have been mapped in this first version of the implementation guide. However, all elements and sections described in the guide (document structure / use cases, etc.) have already been mapped, enabling an initial use of the pregnancy passport. You can find the current status under [Mapping Concept Data Elements](mapping-concept-dataelements.md).

**Download**: You can download this implementation guide in the [npm package format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](package.tgz).

### MustSupport

In the concept for the electronic pregnancy passport, the data elements are described in terms of cardinality and conformity, which are then applied in the CH EPREG profiles (as long as it conforms to FHIR and the CH Core requirements). This table shows how the different levels of conformity are reflected in the FHIR profiles:

| | |
| :--- | :--- |
| **M**andatory: This is a required field. It must contain a valid value. | 1.. |
| **R**equired: The field should always contain a valid value if possible. | 0.. MS (`mustSupport`=true) |
| **O**ptional: The field may contain a valid value. | 0.. |

For CH EPREG the meaning of [mustSupport](https://hl7.org/fhir/R4/conformance-rules.html#mustSupport) follows also the IHE use of **R2 (Required if known)** as defined in [ITI TF-2: Appendix Z](https://profiles.ihe.net/ITI/TF/Volume2/ch-Z.html#z.10-profiling-conventions-for-constraints-on-fhir): 
 **If the sending application has data for the element, it is required to populate the element with a non-empty value. If the value is not known, the element may be omitted. A receiving application may ignore the information conveyed by the element. A receiving application shall not raise an error solely due to the presence or absence of the element.**

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [BFS Medizinische Statistik - 25 1.4.V02 - Hauptkostenträger für Grundversicherungsleistungen / Prise en charge des soins de base / Unità d’imputazione principale per le prestazioni dell’assicurazione di base](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-25-mainguarantor.html): [Bundle/UC1-Document](Bundle-UC1-Document.md) and [Coverage/UC1-BasicInsurance](Coverage-UC1-BasicInsurance.md)
* [eCH-011 Types](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11.html): [ChEpregPatientChild](StructureDefinition-ch-epreg-patient-child.md) and [ChEpregPatientMother](StructureDefinition-ch-epreg-patient-mother.md)
* [Main guarantor](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-mainguarantor.html): [Bundle/UC1-Document](Bundle-UC1-Document.md) and [Coverage/UC1-SupplementaryInsurance](Coverage-UC1-SupplementaryInsurance.md)
* [ch-ehealth-codesystem-medreg](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-2.16.756.5.30.1.127.3.5.html): [Bundle/UC1-Document](Bundle-UC1-Document.md), [Bundle/UC2-Document](Bundle-UC2-Document.md)...Show 5 more,[Bundle/UC3-Document](Bundle-UC3-Document.md),[ChEpregPractitionerRoleTHCP](StructureDefinition-ch-epreg-practitionerrole-thcp.md),[PractitionerRole/89029102-999c-4b69-a836-e4dbfbd55527](PractitionerRole-89029102-999c-4b69-a836-e4dbfbd55527.md),[PractitionerRole/UC1-PetraSectionataAtFrauenzimmer](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md)and[PractitionerRole/UC3-ClaudiaFruehblickAtFrauenzimmer](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [BloodGroup](ValueSet-blood-group.md), [Bundle/UC1-Document](Bundle-UC1-Document.md)...Show 37 more,[Bundle/UC2-Document](Bundle-UC2-Document.md),[CH_EPREG](index.md),[ChEpregAppointmentNextExamination](StructureDefinition-ch-epreg-appointment-next-examination.md),[ChEpregComposition](StructureDefinition-ch-epreg-composition.md),[ChEpregCoverage](StructureDefinition-ch-epreg-coverage.md),[ChEpregDocument](StructureDefinition-ch-epreg-document.md),[ChEpregEncounterChild](StructureDefinition-ch-epreg-encounter-child.md),[ChEpregEncounterMother](StructureDefinition-ch-epreg-encounter-mother.md),[ChEpregExtExaminationSequence](StructureDefinition-ch-epreg-ext-examination-sequence.md),[ChEpregObservationAbdominalCircumference](StructureDefinition-ch-epreg-observation-abdominal-circumference.md),[ChEpregObservationBloodGroup](StructureDefinition-ch-epreg-observation-blood-group.md),[ChEpregObservationBloodPressure](StructureDefinition-ch-epreg-observation-blood-pressure.md),[ChEpregObservationBodyWeight](StructureDefinition-ch-epreg-observation-body-weight.md),[ChEpregObservationFetalHeartFeature](StructureDefinition-ch-epreg-observation-fetal-heart-feature.md),[ChEpregObservationFetalMovement](StructureDefinition-ch-epreg-observation-fetal-movement.md),[ChEpregObservationFetalPosition](StructureDefinition-ch-epreg-observation-fetal-position.md),[ChEpregObservationFetalRhD](StructureDefinition-ch-epreg-observation-fetal-rhd.md),[ChEpregObservationFundusHeight](StructureDefinition-ch-epreg-observation-fundus-height.md),[ChEpregObservationGestationalAgeInDays](StructureDefinition-ch-epreg-observation-gestational-age-in-days.md),[ChEpregObservationPregProgress](StructureDefinition-ch-epreg-observation-preg-progress.md),[ChEpregObservationResultsLab](StructureDefinition-ch-epreg-observation-results-lab.md),[ChEpregObservationUrineFinding](StructureDefinition-ch-epreg-observation-urine-finding.md),[ChEpregObservationVaginaFeature](StructureDefinition-ch-epreg-observation-vagina-feature.md),[ChEpregObservationWeightGain](StructureDefinition-ch-epreg-observation-weight-gain.md),[ChEpregOrganizationTHCP](StructureDefinition-ch-epreg-organization-thcp.md),[ChEpregPatientChild](StructureDefinition-ch-epreg-patient-child.md),[ChEpregPatientMother](StructureDefinition-ch-epreg-patient-mother.md),[ChEpregPractitionerRoleTHCP](StructureDefinition-ch-epreg-practitionerrole-thcp.md),[ChEpregPractitionerTHCP](StructureDefinition-ch-epreg-practitioner-thcp.md),[ChEpregRelatedPersonMother](StructureDefinition-ch-epreg-relatedperson-mother.md),[ChEpregRelatedPersonParent](StructureDefinition-ch-epreg-relatedperson-parent.md),[FetalPosition](ValueSet-fetal-position.md),[FetalRhDAntigen](ValueSet-fetal-rhd-antigen.md),[Parent](ValueSet-parent.md),[Patient/76c2c5aa-3d7f-438d-b23d-56ce827695fd](Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.md),[Patient/UC1-KatrinKinderlieb](Patient-UC1-KatrinKinderlieb.md)and[RelatedPerson/UC1-RelatedPerson-BiologicalFather](RelatedPerson-UC1-RelatedPerson-BiologicalFather.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [Bundle/UC1-Document](Bundle-UC1-Document.md), [Bundle/UC2-Document](Bundle-UC2-Document.md)...Show 32 more,[Bundle/UC3-Document](Bundle-UC3-Document.md),[Observation/2f167f2f-44f7-49e3-a970-d7f7a6573cd3](Observation-2f167f2f-44f7-49e3-a970-d7f7a6573cd3.md),[Observation/4268bd90-eff8-41f4-a7b4-2178dac0e470](Observation-4268bd90-eff8-41f4-a7b4-2178dac0e470.md),[Observation/4b9ca365-383e-41c8-9bac-b3c79aea1c7e](Observation-4b9ca365-383e-41c8-9bac-b3c79aea1c7e.md),[Observation/84869994-4348-4ad3-95ee-d9b0faf75dba](Observation-84869994-4348-4ad3-95ee-d9b0faf75dba.md),[Observation/UC1-ALAT-20250205](Observation-UC1-ALAT-20250205.md),[Observation/UC1-AP-20250205](Observation-UC1-AP-20250205.md),[Observation/UC1-AST-20250205](Observation-UC1-AST-20250205.md),[Observation/UC1-AbdominalCircumference-20250205](Observation-UC1-AbdominalCircumference-20250205.md),[Observation/UC1-BloodPressure-20250123](Observation-UC1-BloodPressure-20250123.md),[Observation/UC1-BloodPressure-20250205](Observation-UC1-BloodPressure-20250205.md),[Observation/UC1-BodyWeight-20250123](Observation-UC1-BodyWeight-20250123.md),[Observation/UC1-BodyWeight-20250205](Observation-UC1-BodyWeight-20250205.md),[Observation/UC1-Creatinine-20250205](Observation-UC1-Creatinine-20250205.md),[Observation/UC1-GFR-20250205](Observation-UC1-GFR-20250205.md),[Observation/UC1-GGT-20250205](Observation-UC1-GGT-20250205.md),[Observation/UC1-GestationalAgeInDays-20250123](Observation-UC1-GestationalAgeInDays-20250123.md),[Observation/UC1-GestationalAgeInDays-20250205](Observation-UC1-GestationalAgeInDays-20250205.md),[Observation/UC1-GlucoseLab-20250205](Observation-UC1-GlucoseLab-20250205.md),[Observation/UC1-Hematocrit-20250205](Observation-UC1-Hematocrit-20250205.md),[Observation/UC1-Platelets-20250205](Observation-UC1-Platelets-20250205.md),[Observation/UC1-Urate-20250205](Observation-UC1-Urate-20250205.md),[Observation/UC1-WeightGain-20250123](Observation-UC1-WeightGain-20250123.md),[Observation/UC1-WeightGain-20250205](Observation-UC1-WeightGain-20250205.md),[Observation/UC3-BloodPressure-20250210](Observation-UC3-BloodPressure-20250210.md),[Observation/UC3-BodyWeight-20250210](Observation-UC3-BodyWeight-20250210.md),[Observation/UC3-GestationalAgeInDays-20250210](Observation-UC3-GestationalAgeInDays-20250210.md),[Observation/b9145a94-ea12-479b-a031-b07d4ac9f297](Observation-b9145a94-ea12-479b-a031-b07d4ac9f297.md),[Observation/bbd6f1bc-1d87-4c90-a313-98bea06c3dfb](Observation-bbd6f1bc-1d87-4c90-a313-98bea06c3dfb.md),[Observation/e1c73669-f935-47d1-9dcd-fab76a38bdb7](Observation-e1c73669-f935-47d1-9dcd-fab76a38bdb7.md),[Observation/e949f912-fc27-4849-8632-09caad9fe897](Observation-e949f912-fc27-4849-8632-09caad9fe897.md)and[Observation/f339e056-53d6-4247-9226-5339123fbd14](Observation-f339e056-53d6-4247-9226-5339123fbd14.md)


* This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact [http://www.snomed.org/snomed-ct/getsnomed-ct](http://www.snomed.org/snomed-ct/getsnomed-ct) or info@snomed.org.

* [ch-ehealth-codesystem-hpd](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-2.16.756.5.30.1.127.3.10.9.html): [ChEpregPractitionerRoleTHCP](StructureDefinition-ch-epreg-practitionerrole-thcp.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/UC1-Document](Bundle-UC1-Document.md), [Bundle/UC2-Document](Bundle-UC2-Document.md)...Show 44 more,[Bundle/UC3-Document](Bundle-UC3-Document.md),[ChEpregComposition](StructureDefinition-ch-epreg-composition.md),[ChEpregObservationBloodPressure](StructureDefinition-ch-epreg-observation-blood-pressure.md),[ChEpregObservationBodyWeight](StructureDefinition-ch-epreg-observation-body-weight.md),[ChEpregObservationFetalRhD](StructureDefinition-ch-epreg-observation-fetal-rhd.md),[ChEpregObservationGestationalAgeInDays](StructureDefinition-ch-epreg-observation-gestational-age-in-days.md),[ChEpregObservationPregProgress](StructureDefinition-ch-epreg-observation-preg-progress.md),[ChEpregObservationUrineFinding](StructureDefinition-ch-epreg-observation-urine-finding.md),[Composition/UC1-Composition](Composition-UC1-Composition.md),[Composition/UC3-Composition](Composition-UC3-Composition.md),[FetalRhDAntigen](ValueSet-fetal-rhd-antigen.md),[Observation/1ce882f2-953f-428e-a90b-a55271020fca](Observation-1ce882f2-953f-428e-a90b-a55271020fca.md),[Observation/2f167f2f-44f7-49e3-a970-d7f7a6573cd3](Observation-2f167f2f-44f7-49e3-a970-d7f7a6573cd3.md),[Observation/4268bd90-eff8-41f4-a7b4-2178dac0e470](Observation-4268bd90-eff8-41f4-a7b4-2178dac0e470.md),[Observation/4b9ca365-383e-41c8-9bac-b3c79aea1c7e](Observation-4b9ca365-383e-41c8-9bac-b3c79aea1c7e.md),[Observation/84869994-4348-4ad3-95ee-d9b0faf75dba](Observation-84869994-4348-4ad3-95ee-d9b0faf75dba.md),[Observation/UC1-ALAT-20250205](Observation-UC1-ALAT-20250205.md),[Observation/UC1-AP-20250205](Observation-UC1-AP-20250205.md),[Observation/UC1-AST-20250205](Observation-UC1-AST-20250205.md),[Observation/UC1-BloodPressure-20250123](Observation-UC1-BloodPressure-20250123.md),[Observation/UC1-BloodPressure-20250205](Observation-UC1-BloodPressure-20250205.md),[Observation/UC1-BodyWeight-20250123](Observation-UC1-BodyWeight-20250123.md),[Observation/UC1-BodyWeight-20250205](Observation-UC1-BodyWeight-20250205.md),[Observation/UC1-Creatinine-20250205](Observation-UC1-Creatinine-20250205.md),[Observation/UC1-FetalRhD-20250205](Observation-UC1-FetalRhD-20250205.md),[Observation/UC1-GFR-20250205](Observation-UC1-GFR-20250205.md),[Observation/UC1-GGT-20250205](Observation-UC1-GGT-20250205.md),[Observation/UC1-GestationalAgeInDays-20250123](Observation-UC1-GestationalAgeInDays-20250123.md),[Observation/UC1-GestationalAgeInDays-20250205](Observation-UC1-GestationalAgeInDays-20250205.md),[Observation/UC1-GlucoseLab-20250205](Observation-UC1-GlucoseLab-20250205.md),[Observation/UC1-Hematocrit-20250205](Observation-UC1-Hematocrit-20250205.md),[Observation/UC1-Platelets-20250205](Observation-UC1-Platelets-20250205.md),[Observation/UC1-Urate-20250205](Observation-UC1-Urate-20250205.md),[Observation/UC1-UrineFinding-20250205](Observation-UC1-UrineFinding-20250205.md),[Observation/UC3-BloodPressure-20250210](Observation-UC3-BloodPressure-20250210.md),[Observation/UC3-BodyWeight-20250210](Observation-UC3-BodyWeight-20250210.md),[Observation/UC3-GestationalAgeInDays-20250210](Observation-UC3-GestationalAgeInDays-20250210.md),[Observation/b9145a94-ea12-479b-a031-b07d4ac9f297](Observation-b9145a94-ea12-479b-a031-b07d4ac9f297.md),[Observation/bbd6f1bc-1d87-4c90-a313-98bea06c3dfb](Observation-bbd6f1bc-1d87-4c90-a313-98bea06c3dfb.md),[Observation/e1c73669-f935-47d1-9dcd-fab76a38bdb7](Observation-e1c73669-f935-47d1-9dcd-fab76a38bdb7.md),[Observation/e949f912-fc27-4849-8632-09caad9fe897](Observation-e949f912-fc27-4849-8632-09caad9fe897.md),[Observation/f339e056-53d6-4247-9226-5339123fbd14](Observation-f339e056-53d6-4247-9226-5339123fbd14.md),[Patient/76c2c5aa-3d7f-438d-b23d-56ce827695fd](Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.md)and[Patient/UC1-KatrinKinderlieb](Patient-UC1-KatrinKinderlieb.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://hl7.org/fhir/R4/codesystem-snomedct.html): [BloodGroup](ValueSet-blood-group.md), [Bundle/UC1-Document](Bundle-UC1-Document.md)...Show 48 more,[Bundle/UC2-Document](Bundle-UC2-Document.md),[Bundle/UC3-Document](Bundle-UC3-Document.md),[ChEpregComposition](StructureDefinition-ch-epreg-composition.md),[ChEpregObservationAbdominalCircumference](StructureDefinition-ch-epreg-observation-abdominal-circumference.md),[ChEpregObservationBloodGroup](StructureDefinition-ch-epreg-observation-blood-group.md),[ChEpregObservationFetalHeartFeature](StructureDefinition-ch-epreg-observation-fetal-heart-feature.md),[ChEpregObservationFetalMovement](StructureDefinition-ch-epreg-observation-fetal-movement.md),[ChEpregObservationFetalPosition](StructureDefinition-ch-epreg-observation-fetal-position.md),[ChEpregObservationFundusHeight](StructureDefinition-ch-epreg-observation-fundus-height.md),[ChEpregObservationUrineFinding](StructureDefinition-ch-epreg-observation-urine-finding.md),[ChEpregObservationVaginaFeature](StructureDefinition-ch-epreg-observation-vagina-feature.md),[ChEpregObservationWeightGain](StructureDefinition-ch-epreg-observation-weight-gain.md),[ChEpregPractitionerRoleTHCP](StructureDefinition-ch-epreg-practitionerrole-thcp.md),[ChEpregRelatedPersonMother](StructureDefinition-ch-epreg-relatedperson-mother.md),[ChEpregRelatedPersonParent](StructureDefinition-ch-epreg-relatedperson-parent.md),[Composition/UC1-Composition](Composition-UC1-Composition.md),[Composition/UC3-Composition](Composition-UC3-Composition.md),[FetalPosition](ValueSet-fetal-position.md),[Observation/2db81543-7bf1-4965-a75e-00400c62e78b](Observation-2db81543-7bf1-4965-a75e-00400c62e78b.md),[Observation/3e120206-7aa2-4ced-82c3-3704868e023f](Observation-3e120206-7aa2-4ced-82c3-3704868e023f.md),[Observation/4a907770-6665-4fb4-b186-afd0ddf48742](Observation-4a907770-6665-4fb4-b186-afd0ddf48742.md),[Observation/6eafd07b-c40a-4864-874c-cfe2d5b222ed](Observation-6eafd07b-c40a-4864-874c-cfe2d5b222ed.md),[Observation/UC1-AbdominalCircumference-20250205](Observation-UC1-AbdominalCircumference-20250205.md),[Observation/UC1-BloodGroup-20250205](Observation-UC1-BloodGroup-20250205.md),[Observation/UC1-FetalHeartFeature-20250205](Observation-UC1-FetalHeartFeature-20250205.md),[Observation/UC1-FetalMovement-20250205](Observation-UC1-FetalMovement-20250205.md),[Observation/UC1-FetalPosition-20250205](Observation-UC1-FetalPosition-20250205.md),[Observation/UC1-FundusHeight-20250205](Observation-UC1-FundusHeight-20250205.md),[Observation/UC1-UrineFinding-20250205](Observation-UC1-UrineFinding-20250205.md),[Observation/UC1-VaginaFeature-20250205](Observation-UC1-VaginaFeature-20250205.md),[Observation/UC1-WeightGain-20250123](Observation-UC1-WeightGain-20250123.md),[Observation/UC1-WeightGain-20250205](Observation-UC1-WeightGain-20250205.md),[Observation/UC3-FetalHeartFeatureChildA-20250210](Observation-UC3-FetalHeartFeatureChildA-20250210.md),[Observation/UC3-FetalHeartFeatureChildB-20250210](Observation-UC3-FetalHeartFeatureChildB-20250210.md),[Observation/UC3-UrineFinding-20250210](Observation-UC3-UrineFinding-20250210.md),[Observation/a5c14df0-3dca-4530-a22a-072af14178b1](Observation-a5c14df0-3dca-4530-a22a-072af14178b1.md),[Observation/c9bba019-9ed9-4574-84e2-f7d302e8f5d0](Observation-c9bba019-9ed9-4574-84e2-f7d302e8f5d0.md),[Observation/d0b53779-fde0-4780-9ff4-9ba2a4cf9393](Observation-d0b53779-fde0-4780-9ff4-9ba2a4cf9393.md),[Parent](ValueSet-parent.md),[PractitionerRole/89029102-999c-4b69-a836-e4dbfbd55527](PractitionerRole-89029102-999c-4b69-a836-e4dbfbd55527.md),[PractitionerRole/UC1-PetraSectionataAtFrauenzimmer](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md),[PractitionerRole/UC3-ClaudiaFruehblickAtFrauenzimmer](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md),[PractitionerRole/e1b736e3-10bb-41aa-8d17-c7ba28895880](PractitionerRole-e1b736e3-10bb-41aa-8d17-c7ba28895880.md),[RelatedPerson/67d0e290-21b9-4255-9182-5fe9f21cdbb4](RelatedPerson-67d0e290-21b9-4255-9182-5fe9f21cdbb4.md),[RelatedPerson/UC1-RelatedPerson-BiologicalFather](RelatedPerson-UC1-RelatedPerson-BiologicalFather.md),[RelatedPerson/UC1-RelatedPerson-Mother](RelatedPerson-UC1-RelatedPerson-Mother.md),[RelatedPerson/UC3-RelatedPerson-ChildA-Mother](RelatedPerson-UC3-RelatedPerson-ChildA-Mother.md)and[RelatedPerson/UC3-RelatedPerson-ChildB-Mother](RelatedPerson-UC3-RelatedPerson-ChildB-Mother.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [Observation Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-observation-category.html): [Bundle/UC1-Document](Bundle-UC1-Document.md), [Bundle/UC2-Document](Bundle-UC2-Document.md)...Show 26 more,[Bundle/UC3-Document](Bundle-UC3-Document.md),[ChEpregObservationBloodPressure](StructureDefinition-ch-epreg-observation-blood-pressure.md),[ChEpregObservationBodyWeight](StructureDefinition-ch-epreg-observation-body-weight.md),[Observation/4268bd90-eff8-41f4-a7b4-2178dac0e470](Observation-4268bd90-eff8-41f4-a7b4-2178dac0e470.md),[Observation/UC1-ALAT-20250205](Observation-UC1-ALAT-20250205.md),[Observation/UC1-AP-20250205](Observation-UC1-AP-20250205.md),[Observation/UC1-AST-20250205](Observation-UC1-AST-20250205.md),[Observation/UC1-BloodGroup-20250205](Observation-UC1-BloodGroup-20250205.md),[Observation/UC1-BloodPressure-20250123](Observation-UC1-BloodPressure-20250123.md),[Observation/UC1-BloodPressure-20250205](Observation-UC1-BloodPressure-20250205.md),[Observation/UC1-BodyWeight-20250123](Observation-UC1-BodyWeight-20250123.md),[Observation/UC1-BodyWeight-20250205](Observation-UC1-BodyWeight-20250205.md),[Observation/UC1-Creatinine-20250205](Observation-UC1-Creatinine-20250205.md),[Observation/UC1-FetalRhD-20250205](Observation-UC1-FetalRhD-20250205.md),[Observation/UC1-GFR-20250205](Observation-UC1-GFR-20250205.md),[Observation/UC1-GGT-20250205](Observation-UC1-GGT-20250205.md),[Observation/UC1-GlucoseLab-20250205](Observation-UC1-GlucoseLab-20250205.md),[Observation/UC1-Hematocrit-20250205](Observation-UC1-Hematocrit-20250205.md),[Observation/UC1-Platelets-20250205](Observation-UC1-Platelets-20250205.md),[Observation/UC1-Urate-20250205](Observation-UC1-Urate-20250205.md),[Observation/UC3-BloodPressure-20250210](Observation-UC3-BloodPressure-20250210.md),[Observation/UC3-BodyWeight-20250210](Observation-UC3-BodyWeight-20250210.md),[Observation/b9145a94-ea12-479b-a031-b07d4ac9f297](Observation-b9145a94-ea12-479b-a031-b07d4ac9f297.md),[Observation/e1c73669-f935-47d1-9dcd-fab76a38bdb7](Observation-e1c73669-f935-47d1-9dcd-fab76a38bdb7.md),[Observation/e949f912-fc27-4849-8632-09caad9fe897](Observation-e949f912-fc27-4849-8632-09caad9fe897.md)and[Observation/f339e056-53d6-4247-9226-5339123fbd14](Observation-f339e056-53d6-4247-9226-5339123fbd14.md)
* [contactRole2](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0131.html): [Bundle/UC1-Document](Bundle-UC1-Document.md), [ChEpregPatientMother](StructureDefinition-ch-epreg-patient-mother.md) and [Patient/UC1-KatrinKinderlieb](Patient-UC1-KatrinKinderlieb.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/UC1-Document](Bundle-UC1-Document.md), [Bundle/UC2-Document](Bundle-UC2-Document.md)...Show 13 more,[Bundle/UC3-Document](Bundle-UC3-Document.md),[ChEpregCoverage](StructureDefinition-ch-epreg-coverage.md),[ChEpregEncounterChild](StructureDefinition-ch-epreg-encounter-child.md),[ChEpregEncounterMother](StructureDefinition-ch-epreg-encounter-mother.md),[ChEpregPatientChild](StructureDefinition-ch-epreg-patient-child.md),[ChEpregPatientMother](StructureDefinition-ch-epreg-patient-mother.md),[Coverage/UC1-BasicInsurance](Coverage-UC1-BasicInsurance.md),[Coverage/UC1-SupplementaryInsurance](Coverage-UC1-SupplementaryInsurance.md),[Patient/111d5e66-f17e-4369-90c6-9382e566040e](Patient-111d5e66-f17e-4369-90c6-9382e566040e.md),[Patient/UC1-Child](Patient-UC1-Child.md),[Patient/UC3-ChildA](Patient-UC3-ChildA.md),[Patient/UC3-ChildB](Patient-UC3-ChildB.md)and[Patient/UC3-SophieDoppelherz](Patient-UC3-SophieDoppelherz.md)
* [ActCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html): [Bundle/UC1-Document](Bundle-UC1-Document.md), [Bundle/UC2-Document](Bundle-UC2-Document.md)...Show 12 more,[Bundle/UC3-Document](Bundle-UC3-Document.md),[Encounter/1ba6df42-ae1a-4b4a-886f-33d6b2223b1f](Encounter-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f.md),[Encounter/22aeb067-85f9-4b3b-9301-161604005206](Encounter-22aeb067-85f9-4b3b-9301-161604005206.md),[Encounter/833fd8f2-b75f-4dba-990f-6c46aa468d51](Encounter-833fd8f2-b75f-4dba-990f-6c46aa468d51.md),[Encounter/8e89c502-964f-4234-9728-540d881b0380](Encounter-8e89c502-964f-4234-9728-540d881b0380.md),[Encounter/UC1-EncounterChild20250123](Encounter-UC1-EncounterChild20250123.md),[Encounter/UC1-EncounterChild20250205](Encounter-UC1-EncounterChild20250205.md),[Encounter/UC1-EncounterMother20250123](Encounter-UC1-EncounterMother20250123.md),[Encounter/UC1-EncounterMother20250205](Encounter-UC1-EncounterMother20250205.md),[Encounter/UC3-EncounterChildA20250210](Encounter-UC3-EncounterChildA20250210.md),[Encounter/UC3-EncounterChildB20250210](Encounter-UC3-EncounterChildB20250210.md)and[Encounter/UC3-EncounterMother20250210](Encounter-UC3-EncounterMother20250210.md)
* [ObservationInterpretation](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ObservationInterpretation.html): [Bundle/UC1-Document](Bundle-UC1-Document.md), [Bundle/UC2-Document](Bundle-UC2-Document.md), [Observation/UC1-Creatinine-20250205](Observation-UC1-Creatinine-20250205.md), [Observation/UC1-Urate-20250205](Observation-UC1-Urate-20250205.md) and [Observation/b9145a94-ea12-479b-a031-b07d4ac9f297](Observation-b9145a94-ea12-479b-a031-b07d4ac9f297.md)
* [RoleCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-RoleCode.html): [Bundle/UC2-Document](Bundle-UC2-Document.md), [ChEpregPatientChild](StructureDefinition-ch-epreg-patient-child.md), [ChEpregPatientMother](StructureDefinition-ch-epreg-patient-mother.md) and [Patient/76c2c5aa-3d7f-438d-b23d-56ce827695fd](Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-epreg.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-epreg.r4b)](package.r4b.tgz) are available.

### Dependency Table










### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-epreg",
  "url" : "http://fhir.ch/ig/ch-epreg/ImplementationGuide/ch.fhir.ig.ch-epreg",
  "version" : "1.0.0",
  "name" : "CH_EPREG",
  "title" : "CH EPREG (R4)",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-16",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    }
  ],
  "description" : "FHIR implementation guide for the pregnancy passport in Switzerland.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "packageId" : "ch.fhir.ig.ch-epreg",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7ext",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
        }
      ],
      "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
      "packageId" : "hl7.fhir.uv.extensions.r4",
      "version" : "5.2.0"
    },
    {
      "id" : "hl7_terminology_r4",
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "7.0.1"
    },
    {
      "id" : "ch_fhir_ig_ch_core",
      "uri" : "http://fhir.ch/ig/ch-core/ImplementationGuide/ch.fhir.ig.ch-core",
      "packageId" : "ch.fhir.ig.ch-core",
      "version" : "6.0.0"
    },
    {
      "id" : "ch_fhir_ig_ch_lab_report",
      "uri" : "http://fhir.ch/ig/ch-lab-report/ImplementationGuide/ch.fhir.ig.ch-lab-report",
      "packageId" : "ch.fhir.ig.ch-lab-report",
      "version" : "2.0.0"
    }
  ],
  "definition" : {
    "extension" : [
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2025+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "trial-use"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludettl"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "allow-extensible-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "display-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "../../expansion-params.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "pin-canonicals"
          },
          {
            "url" : "value",
            "valueString" : "pin-multiples"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-epreg/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/expansion-parameters",
        "valueReference" : {
          "reference" : "Parameters/expansion-parameters"
        }
      },
      {
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-internal-dependency",
        "valueCode" : "hl7.fhir.uv.tools.r4#0.8.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2025+"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "releaselabel"
          },
          {
            "url" : "value",
            "valueString" : "trial-use"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludettl"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "allow-extensible-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "display-warnings"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-expansion-params"
          },
          {
            "url" : "value",
            "valueString" : "../../expansion-params.json"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "pin-canonicals"
          },
          {
            "url" : "value",
            "valueString" : "pin-multiples"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "autoload-resources"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "template/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-liquid"
          },
          {
            "url" : "value",
            "valueString" : "input/liquid"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-qa"
          },
          {
            "url" : "value",
            "valueString" : "temp/qa"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-temp"
          },
          {
            "url" : "value",
            "valueString" : "temp/pages"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-output"
          },
          {
            "url" : "value",
            "valueString" : "output"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-suppressed-warnings"
          },
          {
            "url" : "value",
            "valueString" : "input/ignoreWarnings.txt"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "path-history"
          },
          {
            "url" : "value",
            "valueString" : "http://fhir.ch/ig/ch-epreg/history.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-html"
          },
          {
            "url" : "value",
            "valueString" : "template-page.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "template-md"
          },
          {
            "url" : "value",
            "valueString" : "template-page-md.html"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-contact"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-context"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-copyright"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-jurisdiction"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-license"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-publisher"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-version"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "apply-wg"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "active-tables"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "fmm-definition"
          },
          {
            "url" : "value",
            "valueString" : "http://hl7.org/fhir/versions.html#maturity"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "propagate-status"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "excludelogbinaryformat"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "tabbed-snapshots"
          },
          {
            "url" : "value",
            "valueString" : "true"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      }
    ],
    "resource" : [
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-appointment-next-examination"
        },
        "name" : "CH EPREG Appointment: Next Examination",
        "description" : "This profile constrains the Appointment resource to represent the date of the planned next pregnancy examination.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-composition"
        },
        "name" : "CH EPREG Composition",
        "description" : "This profile constrains the Composition resource to represent the first entry in the CH EPREG Document.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-coverage"
        },
        "name" : "CH EPREG Coverage",
        "description" : "This profile constrains the Coverage resource to represent the insurance data.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-document"
        },
        "name" : "CH EPREG Document",
        "description" : "This profile constrains the Bundle resource to represent the pregnancy passport.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-encounter-child"
        },
        "name" : "CH EPREG Encounter: Child",
        "description" : "This profile constrains the Encounter resource to represent a pregnancy examination from the child's perspective.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-encounter-mother"
        },
        "name" : "CH EPREG Encounter: Mother",
        "description" : "This profile constrains the Encounter resource to represent a pregnancy examination from the mother's perspective.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:extension"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-ext-examination-sequence"
        },
        "name" : "CH EPREG Extension: Examination Sequence",
        "description" : "This extension represents the sequential number of a pregnancy-related examination (e.g., 1 = first examination, 2 = second examination, or second ultrasound). It indicates the order of occurrence within the pregnancy.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-preg-progress"
        },
        "name" : "CH EPREG Observation (Base): Pregnancy Progress",
        "description" : "This base profile constrains the Observation resource to represent the pregnancy progress.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-results-lab"
        },
        "name" : "CH EPREG Observation (Base): Results Laboratory",
        "description" : "This base profile constrains the Observation resource to represent the laboratory results.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-fetal-heart-feature"
        },
        "name" : "CH EPREG Observation (Child): Fetal Heart Feature",
        "description" : "This profile constrains the Observation resource to represent the fetal heart feature (e.g. rate, sounds, rhythm).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-fetal-movement"
        },
        "name" : "CH EPREG Observation (Child): Fetal Movement",
        "description" : "This profile constrains the Observation resource to represent the movement of the fetus (e.g. activity, strength).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-fetal-position"
        },
        "name" : "CH EPREG Observation (Child): Fetal Position",
        "description" : "This profile constrains the Observation resource to represent the position of the fetus.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-blood-group"
        },
        "name" : "CH EPREG Observation (Lab): Blood Group",
        "description" : "This profile constrains the Observation resource to represent the blood group.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-fetal-rhd"
        },
        "name" : "CH EPREG Observation (Lab): Fetal RhD",
        "description" : "This profile constrains the Observation resource to represent the fetal Rhesus D determination from the maternal blood.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-abdominal-circumference"
        },
        "name" : "CH EPREG Observation (Mother): Abdominal Circumference",
        "description" : "This profile constrains the Observation resource to represent the birth abdominal circumference.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-blood-pressure"
        },
        "name" : "CH EPREG Observation (Mother): Blood Pressure",
        "description" : "This profile constrains the Observation resource to represent the blood pressure.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-body-weight"
        },
        "name" : "CH EPREG Observation (Mother): Body Weight",
        "description" : "This profile constrains the Observation resource to represent the body weight.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-fundus-height"
        },
        "name" : "CH EPREG Observation (Mother): Fundus Height",
        "description" : "This profile constrains the Observation resource to represent the the height of the gravid uterus.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-gestational-age-in-days"
        },
        "name" : "CH EPREG Observation (Mother): Gestational Age in Days",
        "description" : "This profile constrains the Observation resource to represent the gestational age in days.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-urine-finding"
        },
        "name" : "CH EPREG Observation (Mother): Urine Finding",
        "description" : "This profile constrains the Observation resource to represent the findings of the urine dipstick test (e.g. protein, glucose, nitrite, bacteria).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-vagina-feature"
        },
        "name" : "CH EPREG Observation (Mother): Vagina Feature",
        "description" : "This profile constrains the Observation resource to represent the vagina feature (e.g. cervix, cervical os).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-observation-weight-gain"
        },
        "name" : "CH EPREG Observation (Mother): Weight Gain",
        "description" : "This profile constrains the Observation resource to represent the gestational weight gain.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-organization-thcp"
        },
        "name" : "CH EPREG Organization: Treating Healthcare Provider",
        "description" : "This profile constrains the Organization resource to represent the treating healthcare provider.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-patient-child"
        },
        "name" : "CH EPREG Patient: Child",
        "description" : "This profile constrains the Patient resource to represent the child (fetus/newborn). (See also the [IBCM Fetal Record Profile](https://hl7.org/fhir/uv/ibcm/2024Sep/StructureDefinition-ibcm-fetal-record.html).)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-patient-mother"
        },
        "name" : "CH EPREG Patient: Mother",
        "description" : "This profile constrains the Patient resource to represent the pregnant individual.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-practitioner-thcp"
        },
        "name" : "CH EPREG Practitioner: Treating Healthcare Provider",
        "description" : "This profile constrains the PractitionerRole resource to represent the treating healthcare provider.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-practitionerrole-thcp"
        },
        "name" : "CH EPREG PractitionerRole: Treating Healthcare Provider",
        "description" : "This profile constrains the PractitionerRole resource to represent the treating healthcare provider.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-relatedperson-mother"
        },
        "name" : "CH EPREG RelatedPerson: Mother",
        "description" : "This profile constrains the RelatedPerson resource to represent the relationship between the mother and the child.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-epreg-relatedperson-parent"
        },
        "name" : "CH EPREG RelatedPerson: Parent",
        "description" : "This profile constrains the RelatedPerson resource to represent the relationship between the parent (besides the biological mother) and the child.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/blood-group"
        },
        "name" : "CH EPREG VS: Blood Group",
        "description" : "This value set includes SNOMED CT codes for blood group findings.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/fetal-position"
        },
        "name" : "CH EPREG VS: Fetal Position",
        "description" : "This value set includes SNOMED CT codes for fetal positions.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/fetal-rhd-antigen"
        },
        "name" : "CH EPREG VS: Fetal RhD Antigen",
        "description" : "This value set includes LOINC codes for the fetal Rhesus D determination.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ValueSet"
          }
        ],
        "reference" : {
          "reference" : "ValueSet/parent"
        },
        "name" : "CH EPREG VS: Parent",
        "description" : "This value set includes SNOMED CT codes for the type of parent.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-AbdominalCircumference-20250205"
        },
        "name" : "UC 1: 101 cm (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Abdominal Circumference",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-abdominal-circumference"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-WeightGain-20250123"
        },
        "name" : "UC 1: 11.1 kg (23.01.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Weight Gain",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-weight-gain"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-WeightGain-20250205"
        },
        "name" : "UC 1: 12.5 kg (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Weight Gain",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-weight-gain"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-BloodPressure-20250123"
        },
        "name" : "UC 1: 120/80 mmHg (23.01.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Blood Pressure",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-blood-pressure"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-BloodPressure-20250205"
        },
        "name" : "UC 1: 160/100 mmHg (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Blood Pressure",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-blood-pressure"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-FetalHeartFeature-20250205"
        },
        "name" : "UC 1: 162 /min (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Child): Fetal Heart Feature",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-heart-feature"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-GestationalAgeInDays-20250123"
        },
        "name" : "UC 1: 35 Weeks (23.01.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Gestational Age",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-gestational-age-in-days"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-GestationalAgeInDays-20250205"
        },
        "name" : "UC 1: 37 Weeks (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Gestational Age",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-gestational-age-in-days"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-BodyWeight-20250123"
        },
        "name" : "UC 1: 80.6 kg (23.01.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Body Weight",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-body-weight"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-BodyWeight-20250205"
        },
        "name" : "UC 1: 82.0 kg (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Body Weight",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-body-weight"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-ALAT-20250205"
        },
        "name" : "UC 1: ALAT 98 U/L (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Lab)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-AP-20250205"
        },
        "name" : "UC 1: AP 109 U/L (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Lab)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-AST-20250205"
        },
        "name" : "UC 1: AST 43 U/L (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Lab)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Coverage"
          }
        ],
        "reference" : {
          "reference" : "Coverage/UC1-BasicInsurance"
        },
        "name" : "UC 1: Basic Insurance",
        "description" : "Example for CH EPREG Coverage",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-coverage"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-VaginaFeature-20250205"
        },
        "name" : "UC 1: Bland (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Vagina Feature",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-vagina-feature"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-BloodGroup-20250205"
        },
        "name" : "UC 1: Blood Group AB Rh+ (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Lab): Blood Group",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-blood-group"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/UC1-Child"
        },
        "name" : "UC 1: Child",
        "description" : "Example for CH EPREG Patient: Child",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-child"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/UC1-Composition"
        },
        "name" : "UC 1: Composition",
        "description" : "Example for CH EPREG Composition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-composition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-Creatinine-20250205"
        },
        "name" : "UC 1: Creatinine 1.2 mg/dL (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Lab)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/UC1-EncounterMother20250205"
        },
        "name" : "UC 1: Examination 05.02.2025",
        "description" : "Example for CH EPREG Encounter: Mother",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-mother"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/UC1-EncounterChild20250205"
        },
        "name" : "UC 1: Examination 05.02.2025",
        "description" : "Example for CH EPREG Encounter: Child",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-child"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/UC1-EncounterMother20250123"
        },
        "name" : "UC 1: Examination 23.01.2025",
        "description" : "Example for CH EPREG Encounter: Mother",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-mother"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/UC1-EncounterChild20250123"
        },
        "name" : "UC 1: Examination 23.01.2025",
        "description" : "Example for CH EPREG Encounter: Child",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-child"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-FetalRhD-20250205"
        },
        "name" : "UC 1: Fetal RhD Rh+ (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Lab): Fetal RhD",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-rhd"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/UC1-Frauenzimmer"
        },
        "name" : "UC 1: Frauenzimmer",
        "description" : "Example for CH EPREG Organization: Treating Healthcare Provider",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-organization-thcp"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-GFR-20250205"
        },
        "name" : "UC 1: GFR 54 mL/min (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Lab)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-GGT-20250205"
        },
        "name" : "UC 1: GGT 43 U/L (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Lab)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-GlucoseLab-20250205"
        },
        "name" : "UC 1: Glucose 8.1 mmol/L (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Lab)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-UrineFinding-20250205"
        },
        "name" : "UC 1: Glucose positive, Nitrite positive (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Urine Finding",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-urine-finding"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-Hematocrit-20250205"
        },
        "name" : "UC 1: Hematocrit 46 % (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Lab)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/UC1-KatrinKinderlieb"
        },
        "name" : "UC 1: Katrin Kinderlieb",
        "description" : "Example for CH EPREG Patient: Mother",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-mother"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/UC1-LaborPipette"
        },
        "name" : "UC 1: Labor Pipette",
        "description" : "Example for CH Core Organization",
        "exampleBoolean" : true
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-FetalMovement-20250205"
        },
        "name" : "UC 1: Normal (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Child): Fetal Movement",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-movement"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/UC1-PetraSectionata"
        },
        "name" : "UC 1: Petra Sectionata",
        "description" : "Example for CH EPREG Practitioner: Treating Healthcare Provider",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitioner-thcp"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/UC1-PetraSectionataAtFrauenzimmer"
        },
        "name" : "UC 1: Petra Sectionata @ Frauenzimmer",
        "description" : "Example for CH EPREG PractitionerRole",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitionerrole-thcp"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-Platelets-20250205"
        },
        "name" : "UC 1: Platelets 130 (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Lab)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/UC1-Document"
        },
        "name" : "UC 1: Pregnancy Passport",
        "description" : "Example for CH EPREG Document - using absolute URLs for fullUrls/references",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-FundusHeight-20250205"
        },
        "name" : "UC 1: Rb/0 (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Fundus Height",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fundus-height"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "RelatedPerson"
          }
        ],
        "reference" : {
          "reference" : "RelatedPerson/UC1-RelatedPerson-BiologicalFather"
        },
        "name" : "UC 1: RelatedPerson Biological Father",
        "description" : "Example for CH EPREG RelatedPerson: Parent",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-relatedperson-parent"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "RelatedPerson"
          }
        ],
        "reference" : {
          "reference" : "RelatedPerson/UC1-RelatedPerson-Mother"
        },
        "name" : "UC 1: RelatedPerson Mother",
        "description" : "Example for CH EPREG RelatedPerson: Mother",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-relatedperson-mother"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Coverage"
          }
        ],
        "reference" : {
          "reference" : "Coverage/UC1-SupplementaryInsurance"
        },
        "name" : "UC 1: Supplementary Insurance",
        "description" : "Example for CH EPREG Coverage",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-coverage"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-Urate-20250205"
        },
        "name" : "UC 1: Urate 6.3 mg/dL (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Lab)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC1-FetalPosition-20250205"
        },
        "name" : "UC 1: Vertex Presentation (05.02.2025)",
        "description" : "Example for CH EPREG Observation (Child): Fetal Position",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-position"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/d0b53779-fde0-4780-9ff4-9ba2a4cf9393"
        },
        "name" : "UC 2: 110 /min (27.03.2025)",
        "description" : "Example for CH EPREG Observation (Child): Fetal Movement",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-heart-feature"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/e949f912-fc27-4849-8632-09caad9fe897"
        },
        "name" : "UC 2: 122/83 mmHg (26.03.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Blood Pressure",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-blood-pressure"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/4268bd90-eff8-41f4-a7b4-2178dac0e470"
        },
        "name" : "UC 2: 160/60 mmHg (27.03.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Blood Pressure",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-blood-pressure"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/2f167f2f-44f7-49e3-a970-d7f7a6573cd3"
        },
        "name" : "UC 2: 32 Weeks (26.03.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Gestational Age",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-gestational-age-in-days"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/84869994-4348-4ad3-95ee-d9b0faf75dba"
        },
        "name" : "UC 2: 32 Weeks (27.03.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Gestational Age",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-gestational-age-in-days"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/e1c73669-f935-47d1-9dcd-fab76a38bdb7"
        },
        "name" : "UC 2: 65 kg (27.03.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Body Weight",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-body-weight"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/f339e056-53d6-4247-9226-5339123fbd14"
        },
        "name" : "UC 2: 65.1 kg (26.03.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Body Weight",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-body-weight"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/2db81543-7bf1-4965-a75e-00400c62e78b"
        },
        "name" : "UC 2: Bland (27.03.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Urine Finding",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-urine-finding"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/4a907770-6665-4fb4-b186-afd0ddf48742"
        },
        "name" : "UC 2: Breech Presentation (26.03.2025)",
        "description" : "Example for CH EPREG Observation (Child): Fetal Position",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-position"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/a5c14df0-3dca-4530-a22a-072af14178b1"
        },
        "name" : "UC 2: Breech Presentation (27.03.2025)",
        "description" : "Example for CH EPREG Observation (Child): Fetal Position",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-position"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/111d5e66-f17e-4369-90c6-9382e566040e"
        },
        "name" : "UC 2: Child",
        "description" : "Example for CH EPREG Patient: Child",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-child"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/8e89c502-964f-4234-9728-540d881b0380"
        },
        "name" : "UC 2: Examination 26.03.2025",
        "description" : "Example for CH EPREG Encounter: Mother",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-mother"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/22aeb067-85f9-4b3b-9301-161604005206"
        },
        "name" : "UC 2: Examination 26.03.2025",
        "description" : "Example for CH EPREG Encounter: Child",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-child"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/1ba6df42-ae1a-4b4a-886f-33d6b2223b1f"
        },
        "name" : "UC 2: Examination 27.03.2025",
        "description" : "Example for CH EPREG Encounter: Mother",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-mother"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/833fd8f2-b75f-4dba-990f-6c46aa468d51"
        },
        "name" : "UC 2: Examination 27.03.2025",
        "description" : "Example for CH EPREG Encounter: Child",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-child"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/76c2c5aa-3d7f-438d-b23d-56ce827695fd"
        },
        "name" : "UC 2: Fabienne Babyglück",
        "description" : "Example for CH EPREG Patient: Mother",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-mother"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/fbe019f1-6574-40be-940f-d03da0c743db"
        },
        "name" : "UC 2: Geburtsklinik",
        "description" : "Example for CH EPREG Organization: Treating Healthcare Provider",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-organization-thcp"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/b9145a94-ea12-479b-a031-b07d4ac9f297"
        },
        "name" : "UC 2: Glucose 3.9 mmol/L (27.03.2025)",
        "description" : "Example for CH EPREG Observation (Lab)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-results-lab"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/bbd6f1bc-1d87-4c90-a313-98bea06c3dfb"
        },
        "name" : "UC 2: Glucose Strip (26.03.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Pregnancy Progress - Further Examination",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-preg-progress"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/4b9ca365-383e-41c8-9bac-b3c79aea1c7e"
        },
        "name" : "UC 2: Glucose Strip (27.03.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Pregnancy Progress - Further Examination",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-preg-progress"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/1ce882f2-953f-428e-a90b-a55271020fca"
        },
        "name" : "UC 2: Heartburn (27.03.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Pregnancy Progress - Further Examination",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-preg-progress"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/c9bba019-9ed9-4574-84e2-f7d302e8f5d0"
        },
        "name" : "UC 2: MM 5 cm (27.03.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Vagina Feature",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-vagina-feature"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/UC2-Document"
        },
        "name" : "UC 2: Pregnancy Passport",
        "description" : "Example for CH EPREG Document - using UUIDs for fullUrls/references",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/6eafd07b-c40a-4864-874c-cfe2d5b222ed"
        },
        "name" : "UC 2: Rb/2 (27.03.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Fundus Height",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fundus-height"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "RelatedPerson"
          }
        ],
        "reference" : {
          "reference" : "RelatedPerson/67d0e290-21b9-4255-9182-5fe9f21cdbb4"
        },
        "name" : "UC 2: RelatedPerson Mother",
        "description" : "Example for CH EPREG RelatedPerson: Mother",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-relatedperson-mother"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/c314ae56-7edb-4ef9-b38a-216c9a979374"
        },
        "name" : "UC 2: Ruth Ohazwei",
        "description" : "Example for CH EPREG Practitioner: Treating Healthcare Provider",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitioner-thcp"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/e1b736e3-10bb-41aa-8d17-c7ba28895880"
        },
        "name" : "UC 2: Ruth Ohazwei @ Geburtsklinik",
        "description" : "Example for CH EPREG PractitionerRole",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitionerrole-thcp"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/a61d6a0b-ee42-443e-92e5-167d2e42f137"
        },
        "name" : "UC 2: Tanja Allesgut",
        "description" : "Example for CH EPREG Practitioner: Treating Healthcare Provider",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitioner-thcp"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/89029102-999c-4b69-a836-e4dbfbd55527"
        },
        "name" : "UC 2: Tanja Allesgut @ Geburtsklinik",
        "description" : "Example for CH EPREG PractitionerRole",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitionerrole-thcp"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/3e120206-7aa2-4ced-82c3-3704868e023f"
        },
        "name" : "UC 2: Weak (27.03.2025)",
        "description" : "Example for CH EPREG Observation (Child): Fetal Movement",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-movement"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC3-BloodPressure-20250210"
        },
        "name" : "UC 3: 120/75 mmHg (10.02.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Blood Pressure",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-blood-pressure"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC3-FetalHeartFeatureChildA-20250210"
        },
        "name" : "UC 3: 155 /min (10.02.2025 - Child A)",
        "description" : "Example for CH EPREG Observation (Child): Fetal Heart Feature",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-heart-feature"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC3-FetalHeartFeatureChildB-20250210"
        },
        "name" : "UC 3: 155 /min (10.02.2025 - Child B)",
        "description" : "Example for CH EPREG Observation (Child): Fetal Heart Feature",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-fetal-heart-feature"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC3-BodyWeight-20250210"
        },
        "name" : "UC 3: 64 kg (10.02.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Body Weight",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-body-weight"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC3-GestationalAgeInDays-20250210"
        },
        "name" : "UC 3: 7 Weeks (10.02.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Gestational Age",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-gestational-age-in-days"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/UC3-UrineFinding-20250210"
        },
        "name" : "UC 3: Bland (10.02.2025)",
        "description" : "Example for CH EPREG Observation (Mother): Urine Finding",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-observation-urine-finding"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/UC3-ChildA"
        },
        "name" : "UC 3: Child A",
        "description" : "Example for CH EPREG Patient: Child",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-child"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/UC3-ChildB"
        },
        "name" : "UC 3: Child B",
        "description" : "Example for CH EPREG Patient: Child",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-child"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/UC3-ClaudiaFruehblick"
        },
        "name" : "UC 3: Claudia Frühblick",
        "description" : "Example for CH EPREG Practitioner: Treating Healthcare Provider",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitioner-thcp"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/UC3-ClaudiaFruehblickAtFrauenzimmer"
        },
        "name" : "UC 3: Claudia Frühblick @ Frauenzimmer",
        "description" : "Example for CH EPREG PractitionerRole",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-practitionerrole-thcp"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/UC3-Composition"
        },
        "name" : "UC 3: Composition",
        "description" : "Example for CH EPREG Composition",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-composition"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/UC3-EncounterMother20250210"
        },
        "name" : "UC 3: Examination 10.02.2025",
        "description" : "Example for CH EPREG Encounter: Mother",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-mother"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/UC3-EncounterChildA20250210"
        },
        "name" : "UC 3: Examination 10.02.2025 - Child A",
        "description" : "Example for CH EPREG Encounter: Child",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-child"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Encounter"
          }
        ],
        "reference" : {
          "reference" : "Encounter/UC3-EncounterChildB20250210"
        },
        "name" : "UC 3: Examination 10.02.2025 - Child B",
        "description" : "Example for CH EPREG Encounter: Child",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-encounter-child"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/UC3-Frauenzimmer"
        },
        "name" : "UC 3: Frauenzimmer",
        "description" : "Example for CH EPREG Organization: Treating Healthcare Provider",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-organization-thcp"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Appointment"
          }
        ],
        "reference" : {
          "reference" : "Appointment/UC3-Appointment20250310"
        },
        "name" : "UC 3: Next Examination 10.03.2025",
        "description" : "Example for CH EPREG Appointment: Next Examination",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-appointment-next-examination"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/UC3-Document"
        },
        "name" : "UC 3: Pregnancy Passport",
        "description" : "Example for CH EPREG Document",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "RelatedPerson"
          }
        ],
        "reference" : {
          "reference" : "RelatedPerson/UC3-RelatedPerson-ChildA-Mother"
        },
        "name" : "UC 3: RelatedPerson Child A - Mother",
        "description" : "Example for CH EPREG RelatedPerson: Mother",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-relatedperson-mother"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "RelatedPerson"
          }
        ],
        "reference" : {
          "reference" : "RelatedPerson/UC3-RelatedPerson-ChildB-Mother"
        },
        "name" : "UC 3: RelatedPerson Child B - Mother",
        "description" : "Example for CH EPREG RelatedPerson: Mother",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-relatedperson-mother"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/UC3-SophieDoppelherz"
        },
        "name" : "UC 3: Sophie Doppelherz",
        "description" : "Example for CH EPREG Patient: Mother",
        "exampleCanonical" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-mother"
      }
    ],
    "page" : {
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
          "valueUrl" : "toc.html"
        }
      ],
      "nameUrl" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "index.html"
            }
          ],
          "nameUrl" : "index.html",
          "title" : "Home",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "document.html"
            }
          ],
          "nameUrl" : "document.html",
          "title" : "Document",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase-german.html"
            }
          ],
          "nameUrl" : "usecase-german.html",
          "title" : "Anwendungsfälle",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "usecase-french.html"
            }
          ],
          "nameUrl" : "usecase-french.html",
          "title" : "Cas d'application",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "narrative-content.html"
            }
          ],
          "nameUrl" : "narrative-content.html",
          "title" : "Narrative Content",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "child-relationships.html"
            }
          ],
          "nameUrl" : "child-relationships.html",
          "title" : "Child Relationships",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "mapping-concept-dataelements.html"
            }
          ],
          "nameUrl" : "mapping-concept-dataelements.html",
          "title" : "Mapping Concept Data Elements",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "mapping-concept-valuesets.html"
            }
          ],
          "nameUrl" : "mapping-concept-valuesets.html",
          "title" : "Mapping Concept Value Sets",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "profiles.html"
            }
          ],
          "nameUrl" : "profiles.html",
          "title" : "Profiles",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "extensions.html"
            }
          ],
          "nameUrl" : "extensions.html",
          "title" : "Extensions",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "terminology.html"
            }
          ],
          "nameUrl" : "terminology.html",
          "title" : "Terminology",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "changelog.html"
            }
          ],
          "nameUrl" : "changelog.html",
          "title" : "Changelog",
          "generation" : "markdown"
        }
      ]
    },
    "parameter" : [
      {
        "code" : "path-resource",
        "value" : "input/capabilities"
      },
      {
        "code" : "path-resource",
        "value" : "input/examples"
      },
      {
        "code" : "path-resource",
        "value" : "input/extensions"
      },
      {
        "code" : "path-resource",
        "value" : "input/models"
      },
      {
        "code" : "path-resource",
        "value" : "input/operations"
      },
      {
        "code" : "path-resource",
        "value" : "input/profiles"
      },
      {
        "code" : "path-resource",
        "value" : "input/resources"
      },
      {
        "code" : "path-resource",
        "value" : "input/vocabulary"
      },
      {
        "code" : "path-resource",
        "value" : "input/maps"
      },
      {
        "code" : "path-resource",
        "value" : "input/testing"
      },
      {
        "code" : "path-resource",
        "value" : "input/history"
      },
      {
        "code" : "path-resource",
        "value" : "fsh-generated/resources"
      },
      {
        "code" : "path-pages",
        "value" : "template/config"
      },
      {
        "code" : "path-pages",
        "value" : "input/images"
      },
      {
        "code" : "path-tx-cache",
        "value" : "input-cache/txcache"
      }
    ]
  }
}

```
