# Home - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-report/ImplementationGuide/ch.fhir.ig.ch-lab-report | *Version*:2.0.0 |
| Active as of 2025-12-16 | *Computable Name*:CH_LAB_REPORT |
| **Copyright/Legal**: CC0-1.0 | |

### Introduction

Modern medical laboratory techniques aid clinicians in diagnosing, preventing, and treating diseases by analyzing blood, urine, tissue samples, cerebrospinal fluid, exhaled air, and wound secretions utilizing contemporary medical laboratory techniques. In order for the results to be evaluated correctly, a number of requirements must be met, including the correct reproduction of the results of clinical laboratory tests.

[Changelog](changelog.md) with significant changes, open and closed issues.

### Foundation

This implementation guide is based on the [HL7 Europe Laboratory Report](https://hl7.eu/fhir/laboratory/0.1.0/). It enables the cross-border exchange of laboratory results in Europe. The aim of the interoperability of electronic laboratory records is to ensure the uniform processing of information between health information systems, regardless of their technology, application or platform, so that it can be meaningfully interpreted by the recipient. Citizens should have better control over their health data, especially their laboratory data, just as healthcare professionals should have easy and secure access to their patients' laboratory data. The implementation guide uses the Swiss Core profiles from [CH Core](http://fhir.ch/ig/ch-core/index.html) and the terminology from [CH Term](http://fhir.ch/ig/ch-term/index.html).

### Management Summary

This implementation guide specifies the exchange format for the comprehensive and correct reproduction of clinical laboratory results. These consist of the following data in detail:

#### Administrative Data

* Patient Information: Include the patient's name, age, gender, date of birth, and any other relevant identification details.
* Order Data: Ordering practitioner, organization, ordering date, recipients.
* Laboratory Information: Include details about the laboratory that performed the analysis, such as the name, address, and contact information.
* Authorized Signatures: Include the signatures or electronic authentication of the laboratory personnel responsible for conducting and validating the tests.

#### Laboratory Analytic-Test Data

* Specimen Information: Specification of the pre-analytical conditions, the type of specimen collected for analysis. This could include details like the date and time of collection.
* Test Request Details: Information about the tests requested are provided by the requester. It includes the name of the test, mostly in form of a code, the reason for the test, and any specific instructions given.
* Test Results: The results of each test performed must be presented. Appropriate units of measurement and reference ranges for comparison must be presented. Any values that fall outside the normal range are highlighted.
* Reference Ranges: Normal or expected range of values for each test are included. This helps healthcare providers interpret the results in the context of the patient's health. Since these data may be dependent from the used test-kits, the identification of the test-kits (UDI) might be useful. Alternatively, the likelihood ratio of the test, if available, can be used for the interpretation of the results. The likelihood ratio is not dependent on the kind of used test-kit.
* Certain results are shown in the form of images, e.g. electrophoresis of haemoglobin, haematology scatter-plots, microbiological cultures, or MALDI-TOF mass spectrometry.
* Interpretation or Comments: Include any additional comments or interpretations provided by the laboratory. This can help healthcare providers understand the clinical significance of the results.
* Date and Time of Analysis: Provide the date and time when the laboratory tests were conducted.
* Observation Profiles: We have proposed some profiles hoping they are useful for the laboratories. These profiles represent laboratory result panels, like CBC panel for automated blood cell count, which corresponds to haematogram II of the 'Analysenliste (AL)'. The use of these panels is not mandatory, they are intended as an aid and template and should be adapted to your own requirements.

**Download**: You can download this implementation guide in [NPM format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](package.tgz).

### Must Support

To fulfill the requirements of the [estimated glomerular filtration rate (eGFR)](https://www.zkidney.com/mdrd-main) formulas and the requirements of the [L4CHLAB Dataset](https://www.famh.ch/qualitaet-sicherheit/l4chlab-dataset/) the corresponding FHIR elements 'mustSupport' flag have been set to true: Required if known. If the sending application has data for the element, it is required to populate the element with a non-empty value. If the value is not known, the element may be omitted. A receiving application may ignore the information conveyed by the element. A receiving application shall not raise an error solely due to the presence or absence of the element.

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This implementation guide contains and references intellectual property owned by third parties ("Third Party IP"). Acceptance of these License Terms does not grant any rights with respect to Third Party IP. The licensee alone is responsible for identifying and obtaining any necessary licenses or authorizations to utilize Third Party IP in connection with the specification or otherwise.

This publication includes IP covered under the following statements.

* CC0-1.0

* [eCH-011 Types](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11.html): [ChLabPatient](StructureDefinition-ch-lab-patient.md)
* [eCH-011 MaritalStatus](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11-maritalstatus.html): [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md), [Bundle/LabResultReport-2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md), [Bundle/LabResultReport-3-breath-test](Bundle-LabResultReport-3-breath-test.md) and [Bundle/LabResultReport-4-sepsis](Bundle-LabResultReport-4-sepsis.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [CH_LAB_REPORT](index.md), [ChLabBloodGroupAntibody](ValueSet-ch-lab-bloodgroup-antibody-vs.md)...Show 40 more,[ChLabBloodGroupAntibodyScreen](ValueSet-ch-lab-bloodgroup-antibody-screen-vs.md),[ChLabBloodGroupImmunoHematology](ValueSet-ch-lab-bloodgroup-immuno-hematology-vs.md),[ChLabDiagnosticReport](StructureDefinition-ch-lab-diagnosticreport.md),[ChLabErythrocyteCount](StructureDefinition-ch-lab-observation-results-rbc.md),[ChLabErythrocyteDistributionWidth](StructureDefinition-ch-lab-observation-results-ery-distribution-width.md),[ChLabHematocrit](StructureDefinition-ch-lab-observation-results-ht.md),[ChLabHemoglobin](StructureDefinition-ch-lab-observation-results-hb.md),[ChLabLeucocyteCount](StructureDefinition-ch-lab-observation-results-wbc.md),[ChLabMeanCorpuscularHemoglobin](StructureDefinition-ch-lab-observation-results-mch.md),[ChLabMeanCorpuscularHemoglobinConcentration](StructureDefinition-ch-lab-observation-results-mchc.md),[ChLabMeanCorpuscularVolume](StructureDefinition-ch-lab-observation-results-mcv.md),[ChLabObservationBloodGroup](StructureDefinition-ch-lab-observation-blood-group.md),[ChLabObservationCBCPanel](StructureDefinition-ch-lab-observation-cbc-panel.md),[ChLabObservationPanel](StructureDefinition-ChLab-observation-panel.md),[ChLabObservationRenalInsufficiencyPanel](StructureDefinition-ch-lab-observation-renal-insufficiency-panel.md),[ChLabObservationResultsLaboratory](StructureDefinition-ch-lab-observation-results-laboratory.md),[ChLabObservationSingleTest](StructureDefinition-ChLab-observation-single-test.md),[ChLabObservation_CBC](StructureDefinition-ch-lab-observation-cbc.md),[ChLabObservation_eGFR](StructureDefinition-ch-lab-observation-egfr.md),[ChLabObservation_eGFR_CKD_EPI_2009](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2009.md),[ChLabObservation_eGFR_CKD_EPI_2021](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2021.md),[ChLabObservation_eGFR_MDRD](StructureDefinition-ch-lab-observation-egfr-mdrd.md),[ChLabObservation_uACR](StructureDefinition-ch-lab-observation-albumin-creatinine-urine-ratio.md),[ChLabPatient](StructureDefinition-ch-lab-patient.md),[ChLabPlateletCount](StructureDefinition-ch-lab-observation-results-platelets.md),[ChLabPlateletDistributionWidth](StructureDefinition-ch-lab-observation-results-platelets-distribution-width.md),[ChLabPlateletMeanVolume](StructureDefinition-ch-lab-observation-results-platelets-mean-volume.md),[ChLabPractitioner](StructureDefinition-ch-lab-practitioner.md),[ChLabPractitionerRole](StructureDefinition-ch-lab-practitionerrole.md),[ChLabReportComposition](StructureDefinition-ch-lab-report-composition.md),[ChLabReportDeviceAnalyzer](StructureDefinition-ch-lab-report-device-analyzer.md),[ChLabReportDeviceTestKit](StructureDefinition-ch-lab-report-device-test-kit.md),[ChLabReportDocument](StructureDefinition-ch-lab-report-document.md),[ChLabReportServiceRequest](StructureDefinition-ch-lab-report-servicerequest.md),[ChLabSpecimen](StructureDefinition-ch-lab-specimen.md),[ChLabSpecimenAdditiveSubstance](StructureDefinition-ch-lab-specimen-additive-substance.md),[ObservationCodeEntvolRatio](ValueSet-observation-code-entsvol-ratio.md),[ObservationCodeMDRD](ValueSet-observation-code-mdrd-male-female.md),[ObservationCode_CDK_EPI_2009](ValueSet-observation-code-cdk-epi-2009.md)and[ObservationCode_CDK_EPI_2021](ValueSet-observation-code-cdk-epi-2021.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md), [Bundle/LabResultReport-2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md)...Show 25 more,[Bundle/LabResultReport-3-breath-test](Bundle-LabResultReport-3-breath-test.md),[Bundle/LabResultReport-4-sepsis](Bundle-LabResultReport-4-sepsis.md),[Observation/AlbuminCreatininRatioUrin](Observation-AlbuminCreatininRatioUrin.md),[Observation/BloodGroup-codedResult-3](Observation-BloodGroup-codedResult-3.md),[Observation/BloodGroup-freeTextResult-3](Observation-BloodGroup-freeTextResult-3.md),[Observation/Estimated-GFR](Observation-Estimated-GFR.md),[Observation/ExampleObservationHb](Observation-ExampleObservationHb.md),[Observation/ExampleObservationHt](Observation-ExampleObservationHt.md),[Observation/ExampleObservationMCH](Observation-ExampleObservationMCH.md),[Observation/ExampleObservationMCHC](Observation-ExampleObservationMCHC.md),[Observation/ExampleObservationMCV](Observation-ExampleObservationMCV.md),[Observation/ExampleObservationPlateletCount](Observation-ExampleObservationPlateletCount.md),[Observation/ExampleObservationRBC](Observation-ExampleObservationRBC.md),[Observation/ExampleObservationRDW-CV](Observation-ExampleObservationRDW-CV.md),[Observation/ExampleObservationRDW-SD](Observation-ExampleObservationRDW-SD.md),[Observation/ExampleObservationWBC](Observation-ExampleObservationWBC.md),[Observation/Hematocrit](Observation-Hematocrit.md),[Observation/Hemoglobin](Observation-Hemoglobin.md),[Observation/Observation-eGFR-CKD-EPI-2009-cr](Observation-Observation-eGFR-CKD-EPI-2009-cr.md),[Observation/Observation-eGFR-CKD-EPI-2009-cr-cys](Observation-Observation-eGFR-CKD-EPI-2009-cr-cys.md),[Observation/Observation-eGFR-MDRD-female](Observation-Observation-eGFR-MDRD-female.md),[Observation/Observation-eGFR-MDRD-male](Observation-Observation-eGFR-MDRD-male.md),[Observation/Result-CBC](Observation-Result-CBC.md),[Observation/Result-egfr-cr-ckd-epi-2021](Observation-Result-egfr-cr-ckd-epi-2021.md)and[Observation/Result-egfr-cr-cys-ckd-epi-2021](Observation-Result-egfr-cr-cys-ckd-epi-2021.md)


* This artifact includes content from International Standard Classification of Occupations (ISCO). ISCO is copyright International Labour Organization (ILO). Terms & Conditions in [http://www.ilo.org/global/copyright/lang--en/index.htm](http://www.ilo.org/global/copyright/lang--en/index.htm)

* [International Standard Classification of Occupations (ISCO)](http://tx.fhir.org/r4/ValueSet/isco): [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md), [Bundle/LabResultReport-2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md), [Bundle/LabResultReport-3-breath-test](Bundle-LabResultReport-3-breath-test.md) and [Bundle/LabResultReport-4-sepsis](Bundle-LabResultReport-4-sepsis.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md), [Bundle/LabResultReport-2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md)...Show 65 more,[Bundle/LabResultReport-3-breath-test](Bundle-LabResultReport-3-breath-test.md),[Bundle/LabResultReport-4-sepsis](Bundle-LabResultReport-4-sepsis.md),[ChLabBloodGroupAntibodyScreen](ValueSet-ch-lab-bloodgroup-antibody-screen-vs.md),[ChLabDiagnosticReport](StructureDefinition-ch-lab-diagnosticreport.md),[ChLabErythrocyteCount](StructureDefinition-ch-lab-observation-results-rbc.md),[ChLabErythrocyteDistributionWidth](StructureDefinition-ch-lab-observation-results-ery-distribution-width.md),[ChLabHematocrit](StructureDefinition-ch-lab-observation-results-ht.md),[ChLabHemoglobin](StructureDefinition-ch-lab-observation-results-hb.md),[ChLabLeucocyteCount](StructureDefinition-ch-lab-observation-results-wbc.md),[ChLabMeanCorpuscularHemoglobin](StructureDefinition-ch-lab-observation-results-mch.md),[ChLabMeanCorpuscularHemoglobinConcentration](StructureDefinition-ch-lab-observation-results-mchc.md),[ChLabMeanCorpuscularVolume](StructureDefinition-ch-lab-observation-results-mcv.md),[ChLabObservationBloodGroup](StructureDefinition-ch-lab-observation-blood-group.md),[ChLabObservationCBCPanel](StructureDefinition-ch-lab-observation-cbc-panel.md),[ChLabObservationResultsLaboratory](StructureDefinition-ch-lab-observation-results-laboratory.md),[ChLabObservation_CBC](StructureDefinition-ch-lab-observation-cbc.md),[ChLabObservation_eGFR](StructureDefinition-ch-lab-observation-egfr.md),[ChLabObservation_eGFR_CKD_EPI_2009](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2009.md),[ChLabObservation_eGFR_CKD_EPI_2021](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2021.md),[ChLabObservation_eGFR_MDRD](StructureDefinition-ch-lab-observation-egfr-mdrd.md),[ChLabObservation_uACR](StructureDefinition-ch-lab-observation-albumin-creatinine-urine-ratio.md),[ChLabPlateletCount](StructureDefinition-ch-lab-observation-results-platelets.md),[ChLabPlateletDistributionWidth](StructureDefinition-ch-lab-observation-results-platelets-distribution-width.md),[ChLabPlateletMeanVolume](StructureDefinition-ch-lab-observation-results-platelets-mean-volume.md),[ChLabReportComposition](StructureDefinition-ch-lab-report-composition.md),[ChLabReportServiceRequest](StructureDefinition-ch-lab-report-servicerequest.md),[Observation/AlbuminCreatininRatioUrin](Observation-AlbuminCreatininRatioUrin.md),[Observation/BloodGroup-codedResult-1](Observation-BloodGroup-codedResult-1.md),[Observation/BloodGroup-codedResult-2](Observation-BloodGroup-codedResult-2.md),[Observation/BloodGroup-codedResult-3](Observation-BloodGroup-codedResult-3.md),[Observation/BloodGroup-freeTextResult-1](Observation-BloodGroup-freeTextResult-1.md),[Observation/BloodGroup-freeTextResult-2](Observation-BloodGroup-freeTextResult-2.md),[Observation/BloodGroup-freeTextResult-3](Observation-BloodGroup-freeTextResult-3.md),[Observation/BloodGroupAB0RhD](Observation-BloodGroupAB0RhD.md),[Observation/BloodGroupCompAB0CompRhD](Observation-BloodGroupCompAB0CompRhD.md),[Observation/BloodGroupCompAB0CompRhDWeakD](Observation-BloodGroupCompAB0CompRhDWeakD.md),[Observation/BloodGroupMemberABO](Observation-BloodGroupMemberABO.md),[Observation/BloodGroupMemberRh](Observation-BloodGroupMemberRh.md),[Observation/BloodGroupPanel](Observation-BloodGroupPanel.md),[Observation/Estimated-GFR](Observation-Estimated-GFR.md),[Observation/ExampleObservationCBCPanel](Observation-ExampleObservationCBCPanel.md),[Observation/ExampleObservationHb](Observation-ExampleObservationHb.md),[Observation/ExampleObservationHt](Observation-ExampleObservationHt.md),[Observation/ExampleObservationMCH](Observation-ExampleObservationMCH.md),[Observation/ExampleObservationMCHC](Observation-ExampleObservationMCHC.md),[Observation/ExampleObservationMCV](Observation-ExampleObservationMCV.md),[Observation/ExampleObservationPlateletCount](Observation-ExampleObservationPlateletCount.md),[Observation/ExampleObservationRBC](Observation-ExampleObservationRBC.md),[Observation/ExampleObservationRDW-CV](Observation-ExampleObservationRDW-CV.md),[Observation/ExampleObservationRDW-SD](Observation-ExampleObservationRDW-SD.md),[Observation/ExampleObservationWBC](Observation-ExampleObservationWBC.md),[Observation/Hematocrit](Observation-Hematocrit.md),[Observation/Hemoglobin](Observation-Hemoglobin.md),[Observation/Observation-eGFR-CKD-EPI-2009-cr](Observation-Observation-eGFR-CKD-EPI-2009-cr.md),[Observation/Observation-eGFR-CKD-EPI-2009-cr-cys](Observation-Observation-eGFR-CKD-EPI-2009-cr-cys.md),[Observation/Observation-eGFR-MDRD-female](Observation-Observation-eGFR-MDRD-female.md),[Observation/Observation-eGFR-MDRD-male](Observation-Observation-eGFR-MDRD-male.md),[Observation/ObservationPanel](Observation-ObservationPanel.md),[Observation/Result-CBC](Observation-Result-CBC.md),[Observation/Result-egfr-cr-ckd-epi-2021](Observation-Result-egfr-cr-ckd-epi-2021.md),[Observation/Result-egfr-cr-cys-ckd-epi-2021](Observation-Result-egfr-cr-cys-ckd-epi-2021.md),[ObservationCodeEntvolRatio](ValueSet-observation-code-entsvol-ratio.md),[ObservationCodeMDRD](ValueSet-observation-code-mdrd-male-female.md),[ObservationCode_CDK_EPI_2009](ValueSet-observation-code-cdk-epi-2009.md)and[ObservationCode_CDK_EPI_2021](ValueSet-observation-code-cdk-epi-2021.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://tx.fhir.org/r4/ValueSet/snomedct): [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md), [Bundle/LabResultReport-2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md)...Show 46 more,[Bundle/LabResultReport-3-breath-test](Bundle-LabResultReport-3-breath-test.md),[Bundle/LabResultReport-4-sepsis](Bundle-LabResultReport-4-sepsis.md),[ChLabBloodGroupAntibody](ValueSet-ch-lab-bloodgroup-antibody-vs.md),[ChLabBloodGroupImmunoHematology](ValueSet-ch-lab-bloodgroup-immuno-hematology-vs.md),[ChLabDiagnosticReport](StructureDefinition-ch-lab-diagnosticreport.md),[ChLabErythrocyteCount](StructureDefinition-ch-lab-observation-results-rbc.md),[ChLabErythrocyteDistributionWidth](StructureDefinition-ch-lab-observation-results-ery-distribution-width.md),[ChLabHematocrit](StructureDefinition-ch-lab-observation-results-ht.md),[ChLabHemoglobin](StructureDefinition-ch-lab-observation-results-hb.md),[ChLabLeucocyteCount](StructureDefinition-ch-lab-observation-results-wbc.md),[ChLabMeanCorpuscularHemoglobin](StructureDefinition-ch-lab-observation-results-mch.md),[ChLabMeanCorpuscularHemoglobinConcentration](StructureDefinition-ch-lab-observation-results-mchc.md),[ChLabMeanCorpuscularVolume](StructureDefinition-ch-lab-observation-results-mcv.md),[ChLabObservationBloodGroup](StructureDefinition-ch-lab-observation-blood-group.md),[ChLabObservationRenalInsufficiencyPanel](StructureDefinition-ch-lab-observation-renal-insufficiency-panel.md),[ChLabObservationResultsLaboratory](StructureDefinition-ch-lab-observation-results-laboratory.md),[ChLabObservation_CBC](StructureDefinition-ch-lab-observation-cbc.md),[ChLabObservation_eGFR](StructureDefinition-ch-lab-observation-egfr.md),[ChLabObservation_eGFR_CKD_EPI_2009](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2009.md),[ChLabObservation_eGFR_CKD_EPI_2021](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2021.md),[ChLabObservation_eGFR_MDRD](StructureDefinition-ch-lab-observation-egfr-mdrd.md),[ChLabObservation_uACR](StructureDefinition-ch-lab-observation-albumin-creatinine-urine-ratio.md),[ChLabPlateletCount](StructureDefinition-ch-lab-observation-results-platelets.md),[ChLabPlateletDistributionWidth](StructureDefinition-ch-lab-observation-results-platelets-distribution-width.md),[ChLabPlateletMeanVolume](StructureDefinition-ch-lab-observation-results-platelets-mean-volume.md),[ChLabReportComposition](StructureDefinition-ch-lab-report-composition.md),[ChLabReportDeviceAnalyzer](StructureDefinition-ch-lab-report-device-analyzer.md),[ChLabReportDeviceTestKit](StructureDefinition-ch-lab-report-device-test-kit.md),[ChLabSpecimen](StructureDefinition-ch-lab-specimen.md),[ChLabSpecimenAdditiveSubstance](StructureDefinition-ch-lab-specimen-additive-substance.md),[Observation/BloodGroup-codedResult-1](Observation-BloodGroup-codedResult-1.md),[Observation/BloodGroup-codedResult-2](Observation-BloodGroup-codedResult-2.md),[Observation/BloodGroup-codedResult-3](Observation-BloodGroup-codedResult-3.md),[Observation/BloodGroup-freeTextResult-1](Observation-BloodGroup-freeTextResult-1.md),[Observation/BloodGroup-freeTextResult-2](Observation-BloodGroup-freeTextResult-2.md),[Observation/BloodGroup-freeTextResult-3](Observation-BloodGroup-freeTextResult-3.md),[Observation/BloodGroupAB0RhD](Observation-BloodGroupAB0RhD.md),[Observation/BloodGroupCompAB0CompRhD](Observation-BloodGroupCompAB0CompRhD.md),[Observation/BloodGroupCompAB0CompRhDWeakD](Observation-BloodGroupCompAB0CompRhDWeakD.md),[Observation/BloodGroupMemberABO](Observation-BloodGroupMemberABO.md),[Observation/BloodGroupMemberRh](Observation-BloodGroupMemberRh.md),[Observation/BloodGroupPanel](Observation-BloodGroupPanel.md),[Observation/ObservationRenalInsufficiencyPanel](Observation-ObservationRenalInsufficiencyPanel.md),[Specimen/BloodCBC](Specimen-BloodCBC.md),[Specimen/Urin](Specimen-Urin.md)and[Substance/EDTA](Substance-EDTA.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [Observation Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-observation-category.html): [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md), [Bundle/LabResultReport-2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md)...Show 61 more,[Bundle/LabResultReport-3-breath-test](Bundle-LabResultReport-3-breath-test.md),[Bundle/LabResultReport-4-sepsis](Bundle-LabResultReport-4-sepsis.md),[ChLabErythrocyteCount](StructureDefinition-ch-lab-observation-results-rbc.md),[ChLabErythrocyteDistributionWidth](StructureDefinition-ch-lab-observation-results-ery-distribution-width.md),[ChLabHematocrit](StructureDefinition-ch-lab-observation-results-ht.md),[ChLabHemoglobin](StructureDefinition-ch-lab-observation-results-hb.md),[ChLabLeucocyteCount](StructureDefinition-ch-lab-observation-results-wbc.md),[ChLabMeanCorpuscularHemoglobin](StructureDefinition-ch-lab-observation-results-mch.md),[ChLabMeanCorpuscularHemoglobinConcentration](StructureDefinition-ch-lab-observation-results-mchc.md),[ChLabMeanCorpuscularVolume](StructureDefinition-ch-lab-observation-results-mcv.md),[ChLabObservationBloodGroup](StructureDefinition-ch-lab-observation-blood-group.md),[ChLabObservationCBCPanel](StructureDefinition-ch-lab-observation-cbc-panel.md),[ChLabObservationPanel](StructureDefinition-ChLab-observation-panel.md),[ChLabObservationRenalInsufficiencyPanel](StructureDefinition-ch-lab-observation-renal-insufficiency-panel.md),[ChLabObservationResultsLaboratory](StructureDefinition-ch-lab-observation-results-laboratory.md),[ChLabObservationSingleTest](StructureDefinition-ChLab-observation-single-test.md),[ChLabObservation_CBC](StructureDefinition-ch-lab-observation-cbc.md),[ChLabObservation_eGFR](StructureDefinition-ch-lab-observation-egfr.md),[ChLabObservation_eGFR_CKD_EPI_2009](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2009.md),[ChLabObservation_eGFR_CKD_EPI_2021](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2021.md),[ChLabObservation_eGFR_MDRD](StructureDefinition-ch-lab-observation-egfr-mdrd.md),[ChLabObservation_uACR](StructureDefinition-ch-lab-observation-albumin-creatinine-urine-ratio.md),[ChLabPlateletCount](StructureDefinition-ch-lab-observation-results-platelets.md),[ChLabPlateletDistributionWidth](StructureDefinition-ch-lab-observation-results-platelets-distribution-width.md),[ChLabPlateletMeanVolume](StructureDefinition-ch-lab-observation-results-platelets-mean-volume.md),[Observation/AlbuminCreatininRatioUrin](Observation-AlbuminCreatininRatioUrin.md),[Observation/BloodGroup-codedResult-1](Observation-BloodGroup-codedResult-1.md),[Observation/BloodGroup-codedResult-2](Observation-BloodGroup-codedResult-2.md),[Observation/BloodGroup-codedResult-3](Observation-BloodGroup-codedResult-3.md),[Observation/BloodGroup-freeTextResult-1](Observation-BloodGroup-freeTextResult-1.md),[Observation/BloodGroup-freeTextResult-2](Observation-BloodGroup-freeTextResult-2.md),[Observation/BloodGroup-freeTextResult-3](Observation-BloodGroup-freeTextResult-3.md),[Observation/BloodGroupAB0RhD](Observation-BloodGroupAB0RhD.md),[Observation/BloodGroupCompAB0CompRhD](Observation-BloodGroupCompAB0CompRhD.md),[Observation/BloodGroupCompAB0CompRhDWeakD](Observation-BloodGroupCompAB0CompRhDWeakD.md),[Observation/BloodGroupMemberABO](Observation-BloodGroupMemberABO.md),[Observation/BloodGroupMemberRh](Observation-BloodGroupMemberRh.md),[Observation/BloodGroupPanel](Observation-BloodGroupPanel.md),[Observation/Estimated-GFR](Observation-Estimated-GFR.md),[Observation/ExampleObservationCBCPanel](Observation-ExampleObservationCBCPanel.md),[Observation/ExampleObservationHb](Observation-ExampleObservationHb.md),[Observation/ExampleObservationHt](Observation-ExampleObservationHt.md),[Observation/ExampleObservationMCH](Observation-ExampleObservationMCH.md),[Observation/ExampleObservationMCHC](Observation-ExampleObservationMCHC.md),[Observation/ExampleObservationMCV](Observation-ExampleObservationMCV.md),[Observation/ExampleObservationPlateletCount](Observation-ExampleObservationPlateletCount.md),[Observation/ExampleObservationRBC](Observation-ExampleObservationRBC.md),[Observation/ExampleObservationRDW-CV](Observation-ExampleObservationRDW-CV.md),[Observation/ExampleObservationRDW-SD](Observation-ExampleObservationRDW-SD.md),[Observation/ExampleObservationWBC](Observation-ExampleObservationWBC.md),[Observation/Hematocrit](Observation-Hematocrit.md),[Observation/Hemoglobin](Observation-Hemoglobin.md),[Observation/Observation-eGFR-CKD-EPI-2009-cr](Observation-Observation-eGFR-CKD-EPI-2009-cr.md),[Observation/Observation-eGFR-CKD-EPI-2009-cr-cys](Observation-Observation-eGFR-CKD-EPI-2009-cr-cys.md),[Observation/Observation-eGFR-MDRD-female](Observation-Observation-eGFR-MDRD-female.md),[Observation/Observation-eGFR-MDRD-male](Observation-Observation-eGFR-MDRD-male.md),[Observation/ObservationPanel](Observation-ObservationPanel.md),[Observation/ObservationRenalInsufficiencyPanel](Observation-ObservationRenalInsufficiencyPanel.md),[Observation/Result-CBC](Observation-Result-CBC.md),[Observation/Result-egfr-cr-ckd-epi-2021](Observation-Result-egfr-cr-ckd-epi-2021.md)and[Observation/Result-egfr-cr-cys-ckd-epi-2021](Observation-Result-egfr-cr-cys-ckd-epi-2021.md)
* [Observation Reference Range Meaning Codes](http://terminology.hl7.org/7.0.1/CodeSystem-referencerange-meaning.html): [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md) and [Bundle/LabResultReport-2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md)
* [Substance Category Codes](http://terminology.hl7.org/7.0.1/CodeSystem-substance-category.html): [Substance/EDTA](Substance-EDTA.md)
* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md), [Bundle/LabResultReport-2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md), [Bundle/LabResultReport-4-sepsis](Bundle-LabResultReport-4-sepsis.md) and [ChLabPatient](StructureDefinition-ch-lab-patient.md)
* [degreeLicenseCertificate](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0360.html): [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md), [Bundle/LabResultReport-2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md), [Bundle/LabResultReport-3-breath-test](Bundle-LabResultReport-3-breath-test.md) and [Bundle/LabResultReport-4-sepsis](Bundle-LabResultReport-4-sepsis.md)
* [specimenType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0487.html): [Bundle/LabResultReport-3-breath-test](Bundle-LabResultReport-3-breath-test.md)
* [specimenCollectionMethod](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0488.html): [Bundle/LabResultReport-4-sepsis](Bundle-LabResultReport-4-sepsis.md)
* [relevantClincialInformation](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0916.html): [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md), [Bundle/LabResultReport-2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md) and [Bundle/LabResultReport-3-breath-test](Bundle-LabResultReport-3-breath-test.md)
* [MaritalStatus](http://terminology.hl7.org/7.0.1/CodeSystem-v3-MaritalStatus.html): [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md), [Bundle/LabResultReport-2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md), [Bundle/LabResultReport-3-breath-test](Bundle-LabResultReport-3-breath-test.md) and [Bundle/LabResultReport-4-sepsis](Bundle-LabResultReport-4-sepsis.md)
* [ObservationInterpretation](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ObservationInterpretation.html): [Bundle/LabResultReport-1-tvt](Bundle-LabResultReport-1-tvt.md), [Bundle/LabResultReport-4-sepsis](Bundle-LabResultReport-4-sepsis.md)...Show 4 more,[Observation/Observation-eGFR-CKD-EPI-2009-cr](Observation-Observation-eGFR-CKD-EPI-2009-cr.md),[Observation/Observation-eGFR-CKD-EPI-2009-cr-cys](Observation-Observation-eGFR-CKD-EPI-2009-cr-cys.md),[Observation/Observation-eGFR-MDRD-female](Observation-Observation-eGFR-MDRD-female.md)and[Observation/Observation-eGFR-MDRD-male](Observation-Observation-eGFR-MDRD-male.md)
* [RoleCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-RoleCode.html): [ChLabPatient](StructureDefinition-ch-lab-patient.md)


### Cross Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-lab-report.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-lab-report.r4b)](package.r4b.tgz) are available.

### Dependencies

#### Dependency Overview

Illustration showing the dependencies of CH LAB-Report on the [Swiss implementation guides](https://fhir.ch/) and the [European laboratory project](https://hl7.eu/fhir/laboratory/0.1.1/).

**Fig.: Schematic overview of the dependencies between the IGs at the core (in red) and exchange format (in blue + orange) level**

#### Dependency Table









### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-lab-report",
  "url" : "http://fhir.ch/ig/ch-lab-report/ImplementationGuide/ch.fhir.ig.ch-lab-report",
  "version" : "2.0.0",
  "name" : "CH_LAB_REPORT",
  "title" : "CH LAB-Report (R4)",
  "status" : "active",
  "date" : "2025-12-16",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "FHIR® Implementation Guide for Laboratory Reports in Switzerland",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "packageId" : "ch.fhir.ig.ch-lab-report",
  "license" : "CC0-1.0",
  "fhirVersion" : ["4.0.1"],
  "dependsOn" : [
    {
      "id" : "hl7tx",
      "extension" : [
        {
          "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
          "valueMarkdown" : "Automatically added as a dependency - all IGs depend on HL7 Terminology"
        }
      ],
      "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
      "packageId" : "hl7.terminology.r4",
      "version" : "7.0.1"
    },
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
      "id" : "ch_fhir_ig_ch_core",
      "uri" : "http://fhir.ch/ig/ch-core/ImplementationGuide/ch.fhir.ig.ch-core",
      "packageId" : "ch.fhir.ig.ch-core",
      "version" : "6.0.0"
    },
    {
      "id" : "hl7_fhir_eu_laboratory",
      "uri" : "http://hl7.eu/fhir/laboratory/ImplementationGuide/hl7.fhir.eu.laboratory",
      "packageId" : "hl7.fhir.eu.laboratory",
      "version" : "0.1.1"
    },
    {
      "id" : "hl7_fhir_uv_ips",
      "uri" : "http://hl7.org/fhir/uv/ips/ImplementationGuide/hl7.fhir.uv.ips",
      "packageId" : "hl7.fhir.uv.ips",
      "version" : "1.1.0"
    },
    {
      "id" : "hl7_fhir_eu_extensions",
      "uri" : "http://hl7.eu/fhir/extensions/ImplementationGuide/hl7.fhir.eu.extensions",
      "packageId" : "hl7.fhir.eu.extensions",
      "version" : "0.1.0"
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
            "valueString" : "2024+"
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
            "valueString" : "http://fhir.ch/ig/ch-lab-report/history.html"
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
            "valueString" : "2024+"
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
            "valueString" : "http://fhir.ch/ig/ch-lab-report/history.html"
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
            "valueString" : "Device"
          }
        ],
        "reference" : {
          "reference" : "Device/Afinion-2"
        },
        "name" : "Afinion™ 2",
        "description" : "Example of a Hematology Analyzer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-device-analyzer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Device"
          }
        ],
        "reference" : {
          "reference" : "Device/729d1c62-051e-4e3a-80d4-06f861b2a794"
        },
        "name" : "Afinion™ CRP Test",
        "description" : "Example of a laboratory Testkit",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-device-test-kit"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/AlbuminCreatininRatioUrin"
        },
        "name" : "Albumin Creatinin Ratio Urin",
        "description" : "Example of Laboratory Test Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-albumin-creatinine-urine-ratio"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Specimen"
          }
        ],
        "reference" : {
          "reference" : "Specimen/BloodCBC"
        },
        "name" : "Blood CBC Sample",
        "description" : "Example for Specimen for automated CBC Examination",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BloodGroupMemberABO"
        },
        "name" : "Blood Group ABO",
        "description" : "Example reporting just blood group ABO System",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-single-test"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BloodGroupPanel"
        },
        "name" : "Blood Group ABO Rh Panel",
        "description" : "Example reporting Blood Group and RhD Result separately in a member and coded with SNOMED CT",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-panel"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BloodGroup-codedResult-2"
        },
        "name" : "Blood Group coded Result with Components ABO, RhD, Antibody Screen Test and DAT",
        "description" : "Example reporting ABO group [Type], Rh [Type], antibody screen test and DAT",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BloodGroup-codedResult-1"
        },
        "name" : "Blood Group coded Result with Components ABO, RhD, Date, Period and Antibody Results",
        "description" : "Example reporting ABO group [Type], Rh [Type], T + S, Antibodies",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BloodGroup-codedResult-3"
        },
        "name" : "Blood Group coded Result with Components Hemoglobine, ABO, RhD, Rh Phenotype and Antibody Results",
        "description" : "Example reporting Hemoglobin, ABO group [Type] and Rh [Type], Rhesus Phenotype and Antibodies",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BloodGroup-freeTextResult-2"
        },
        "name" : "Blood Group free Text Result with Components ABO, RhD, Antibody Screen Test and DAT",
        "description" : "Example reporting ABO group [Type], Rh [Type], antibody screen test and DAT",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BloodGroup-freeTextResult-1"
        },
        "name" : "Blood Group free Text Result with Components ABO, RhD, Date, Period and Antibody Results",
        "description" : "Example reporting ABO group [Type], Rh [Type], T + S, Antibodies",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BloodGroup-freeTextResult-3"
        },
        "name" : "Blood Group free Text Result with Components Hemoglobine, ABO, RhD, Rh Phenotype and Antibody Results",
        "description" : "Example reporting Hemoglobin, ABO group [Type] and Rh [Type], Rhesus Phenotype and Antibodies",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BloodGroupCompAB0CompRhD"
        },
        "name" : "Blood Group Panel with Component ABO and Component Rh",
        "description" : "Example reporting ABO group [Type] and Rh [Type] separately in a component and coded with SNOMED CT",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BloodGroupCompAB0CompRhDWeakD"
        },
        "name" : "Blood Group Panel with Component ABO and Component Rh resulting Weak D",
        "description" : "Example reporting ABO group [Type] and Rh [Type] separately in a component and coded with SNOMED CT, the latter proving weak D is in VS",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BloodGroupMemberRh"
        },
        "name" : "Blood Group Rh",
        "description" : "Example reporting just blood group Rh System",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-single-test"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/BloodGroupAB0RhD"
        },
        "name" : "Blood Group Rh combined",
        "description" : "Example reporting Blood Group and RhD Result combined and coded with SNOMED CT",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-blood-group"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/LabResultReport-1-tvt"
        },
        "name" : "Bundle 1-tvt",
        "description" : "Example of a Laboratory Report for scenario deep vein thrombosis, containing Results from Hematology, Coagulation and Clinical Chemistry",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/LabResultReport-2-electrophoresis"
        },
        "name" : "Bundle 2-electrophoresis",
        "description" : "Example of a Laboratory Report containing images",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/LabResultReport-3-breath-test"
        },
        "name" : "Bundle 3-breath-test",
        "description" : "Example of a laboratory report containing scalar results in chronological order",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/LabResultReport-4-sepsis"
        },
        "name" : "Bundle 4-sepsis",
        "description" : "Example of a Laboratory Report for suspected sepsis",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-document"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-lab-observation-egfr"
        },
        "name" : "CH LAB Observation Results: eGFR",
        "description" : "Renal function can be determined by laboratory measurement of serum creatinine, from which the estimated glomerular filtration rate (eGFR) can be calculated.",
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
          "reference" : "StructureDefinition/ch-lab-observation-egfr-ckd-epi-2009"
        },
        "name" : "CH LAB Observation Results: eGFR-CKD-EPI(ASR) 2009 Profile for blacks and non-blacks",
        "description" : "Renal function can be determined by laboratory measurement of serum creatinine, from \nwhich the estimated glomerular (eGFR_CKD_EPI) filtration rate can be calculated. Further input parameters are age, race, gender, body height and weight.\n \nUse [this calculator:](https://nierenrechner.de/index.php?page=egfr-ckd-rechner)\nor [GFR Calculators:](http://www.mdrd.com/)",
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
          "reference" : "StructureDefinition/ch-lab-specimen-additive-substance"
        },
        "name" : "CH LAB-Report Additive Substance",
        "description" : "This profile defines how to represent Specimen Additive Substances in HL7 FHIR for the purpose of this guide.",
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
          "reference" : "ValueSet/ch-lab-bloodgroup-antibody-vs"
        },
        "name" : "CH LAB-Report BloodGroup Antibody Result (SNOMED CT coded substances)",
        "description" : "This value set is used in the ChLabObservationBloodGroup profile. It contains results of Blood Group Antibodies\n(substance) coded with SNOMED CT. It is used in the ChLabObservationBloodGroup profile",
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
          "reference" : "ValueSet/ch-lab-bloodgroup-antibody-screen-vs"
        },
        "name" : "CH LAB-Report BloodGroup Antibody Screen Test (LOINC codes)",
        "description" : "This value set is used in the ChLabObservationBloodGroup profile. It represents\natypical IgG antibodies prior to transfusion or during pregnancy. The screening test is designed\nspecifically to detect IgG antibodies and some IgM antibodies (non ABO) may also be detected.\nAntibodies detected by the antibody screen should then be identified, and a titer performed if\nthe antibody identified is considered to be clinically significant during pregnancy.",
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
          "reference" : "ValueSet/ch-lab-bloodgroup-immuno-hematology-vs"
        },
        "name" : "CH LAB-Report BloodGroup Immunohematology Tests (SNOMED CT coded procedures)",
        "description" : "This value set is used in the ChLabObservationBloodGroup profile. It contains Laboratory tests related to immunohematology",
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
          "reference" : "ValueSet/observation-code-mdrd-male-female"
        },
        "name" : "CH LAB-Report Codes for eGFR (MDRD)",
        "description" : "ValueSet for the allowed eGFR among males and eGFR among females codes",
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
          "reference" : "ValueSet/observation-code-cdk-epi-2009"
        },
        "name" : "CH LAB-Report Codes for eGFR in CKD-EPI",
        "description" : "ValueSet for the allowed eGFRcr and eGFRcr-cys codes among non-blacks",
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
          "reference" : "ValueSet/observation-code-cdk-epi-2021"
        },
        "name" : "CH LAB-Report Codes for eGFR in CKD-EPI 2021",
        "description" : "ValueSet for the allowed eGFRcr and eGFRcr-cys codes, has no race term",
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
          "reference" : "ValueSet/observation-code-entsvol-ratio"
        },
        "name" : "CH LAB-Report Codes for Erythrocyte Distribuiton Width Test",
        "description" : "ValueSet for the allowed codes ENTVOL and RATIO",
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
          "reference" : "StructureDefinition/ch-lab-report-composition"
        },
        "name" : "CH LAB-Report Composition: Laboratory Report",
        "description" : "This profile constrains the Composition resource for the purpose of laboratory test reports in Switzerland.",
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
          "reference" : "StructureDefinition/ch-lab-report-device-analyzer"
        },
        "name" : "CH LAB-Report Device: Analyzer",
        "description" : "Holds Laboratory Analyzer Data.",
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
          "reference" : "StructureDefinition/ch-lab-report-device-test-kit"
        },
        "name" : "CH LAB-Report Device: TestKit",
        "description" : "Holds Laboratory Test-Kit Data.",
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
          "reference" : "StructureDefinition/ch-lab-diagnosticreport"
        },
        "name" : "CH LAB-Report DiagnosticReport: Laboratory Report",
        "description" : "This profile constrains the DiagnosticReport resource for the purpose of laboratory test reports in Switzerland.",
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
          "reference" : "StructureDefinition/ch-lab-report-document"
        },
        "name" : "CH LAB-Report Document: Laboratory Report",
        "description" : "This profile constrains the Bundle resource for the purpose of laboratory test reports in Switzerland.",
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
          "reference" : "StructureDefinition/ch-lab-observation-cbc-panel"
        },
        "name" : "CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in nested Profiles",
        "description" : "This panel is the traditional hemogram plus platelet count which must now be reported with with hemograms according to current US re-imbursement rule The panel includes 2 different RDWs to accommodate the two different ways of reporting them. (Most automated instruments report as a percent ). The hemoglobin produced by the automatic counters does not use a counting method to generate the hemoglobin so we have used the fotometry version of hemoglobin in this panel.",
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
          "reference" : "StructureDefinition/ch-lab-observation-cbc"
        },
        "name" : "CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in sliced component",
        "description" : "Profile for observation laboratory result of automated Count of Blood Cells. We choose as Unit 10⁹/L or 10¹²/L for Cell Count.",
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
          "reference" : "StructureDefinition/ch-lab-observation-albumin-creatinine-urine-ratio"
        },
        "name" : "CH LAB-Report Observation Results: Albumin/Creatinine Ratio in Urine",
        "description" : "This profile constrains the ChLabObservationSingleTest profile determine ratio of the concentration of albumin and creatinine in urine.",
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
          "reference" : "StructureDefinition/ch-lab-observation-blood-group"
        },
        "name" : "CH LAB-Report Observation Results: Blood Group",
        "description" : "Profile to report Blood Group and RhD data. In addition to the code element valuesets delivered from EU Laboratory we have added\n3 supplement value sets: CH LAB-Report BloodGroup Antibody Screen Test Result, CH LAB-Report BloodGroup Antibody Result, CH LAB-Report BloodGroup Immunohematology\nTests. These value sets have a candidate binding, i.e. they are candidates to substitute general value sets in some\ndefined situations.",
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
          "reference" : "StructureDefinition/ch-lab-observation-egfr-mdrd"
        },
        "name" : "CH LAB-Report Observation Results: eGFR - MDRD Profile for male and female Patients, components for blacks and non-blacks",
        "description" : "Renal function can be determined by laboratory measurement of serum creatinine, from which the estimated glomerular\n(eGFR_MDMR) filtration rate can be calculated. Further input parameters are age, race and gender.  \nNote: The MDRD equation is hardly used any more and is replaced by the CKD-EPI equation.  \n[GFR Calculators:](http://www.mdrd.com/)",
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
          "reference" : "StructureDefinition/ch-lab-observation-egfr-ckd-epi-2021"
        },
        "name" : "CH LAB-Report Observation Results: eGFR-CKD-EPI(AS) 2021 Creatinin/Cystatin-C based Profile",
        "description" : "Glomerular filtration rate (GFR) is considered the best overall index of kidney function; \nhowever measured GFR is not practical in the routine clinical setting. Estimated glomerular filtration \nrate (eGFR) is a suitable alternative and can be calculated for adults >= 18 years using an equation \nincorporating the patient's age, gender, and measured serum/plasma/blood creatinine only (eGFRcr) (this term) \nor both serum/plasma/blood creatinine and serum/plasma cystatin-C (eGFRcr-cys) [LOINC: 98979-8](https://loinc.org/98979-8/).\nThe serum/plasma/blood creatinine value is based on a measurement procedure that is traceable to the isotope dilution\nmass spectrometry (IDMS) reference measurement procedure for creatinine. The 2021 CKD-EPI equations used for \neGFRcr and eGFRcr-cys do not have a race term as does the older estimating equations that they replace.\n[https://www.nejm.org/doi/pdf/10.1056/NEJMoa2102953](https://www.nejm.org/doi/pdf/10.1056/NEJMoa2102953)\n\nThere is a [corresponding calculator](https://www.kidney.org/professionals/gfr_calculator)\n\nFor children below 18 y there is a [Pediatric GFR Calculator](https://www.kidney.org/professionals/kdoqi/gfr_calculatorPed)",
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
          "reference" : "StructureDefinition/ch-lab-observation-results-ery-distribution-width"
        },
        "name" : "CH LAB-Report Observation Results: Erythrocyte distribution width by Automated count",
        "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory Erythrocyte Distribuition Width in Switzerland.",
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
          "reference" : "StructureDefinition/ch-lab-observation-results-rbc"
        },
        "name" : "CH LAB-Report Observation Results: ErythrocyteCount",
        "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory erythrocyte count.",
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
          "reference" : "StructureDefinition/ch-lab-observation-results-hb"
        },
        "name" : "CH LAB-Report Observation Results: Hemoglobin",
        "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory hemoglobin.",
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
          "reference" : "StructureDefinition/ch-lab-observation-results-ht"
        },
        "name" : "CH LAB-Report Observation Results: Hemotocrit",
        "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory hemotocrit in Switzerland.",
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
          "reference" : "StructureDefinition/ch-lab-observation-results-laboratory"
        },
        "name" : "CH LAB-Report Observation Results: Laboratory Report",
        "description" : "This profile constrains the Observation resource for the purpose of laboratory test reports in Switzerland.",
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
          "reference" : "StructureDefinition/ch-lab-observation-results-wbc"
        },
        "name" : "CH LAB-Report Observation Results: LeucocyteCount",
        "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory leucocyte count.",
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
          "reference" : "StructureDefinition/ch-lab-observation-results-mchc"
        },
        "name" : "CH LAB-Report Observation Results: Mean Corpuscular Hemoglobin Concentration MCHC",
        "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory MCHC in Switzerland.",
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
          "reference" : "StructureDefinition/ch-lab-observation-results-mch"
        },
        "name" : "CH LAB-Report Observation Results: Mean Corpuscular Hemoglobin MCH",
        "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory MCH in Switzerland.",
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
          "reference" : "StructureDefinition/ch-lab-observation-results-mcv"
        },
        "name" : "CH LAB-Report Observation Results: MeanCorpuscularVolume MCV",
        "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory MCV.",
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
          "reference" : "StructureDefinition/ChLab-observation-panel"
        },
        "name" : "CH LAB-Report Observation Results: Panel",
        "description" : "This profile constrains the ChLabObservationResultsLaboratory profile to represent only a panel / battery of laboratory test results for the HL7 Swiss project. The top-level observation contains only further observations-panels and observations-single-tests in the hasMember element. The observation-panels may carry a conclusion in the note element and/or a global interpretation by the producer of the study, in the interpretation element; value[x] and component elements are not allowed and have to be shown in the observation-single-test profile.",
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
          "reference" : "StructureDefinition/ch-lab-observation-results-platelets"
        },
        "name" : "CH LAB-Report Observation Results: Platelet Count",
        "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory platelet count.",
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
          "reference" : "StructureDefinition/ch-lab-observation-results-platelets-distribution-width"
        },
        "name" : "CH LAB-Report Observation Results: Platelet Distribution Width",
        "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory platelet count.",
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
          "reference" : "StructureDefinition/ch-lab-observation-results-platelets-mean-volume"
        },
        "name" : "CH LAB-Report Observation Results: Platelet Mean Volume",
        "description" : "This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory platelet mean volume.",
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
          "reference" : "StructureDefinition/ch-lab-observation-renal-insufficiency-panel"
        },
        "name" : "CH LAB-Report Observation Results: Renal Insufficiency Panel",
        "description" : "This panel collects the lab results in relation to renal insufiency.",
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
          "reference" : "StructureDefinition/ChLab-observation-single-test"
        },
        "name" : "CH LAB-Report Observation Results: Single Test",
        "description" : "This profile constrains the ChLabObservationResultsLaboratory profile to represent single test results for the  HL7 Swiss project. The profile enables only value[x] and component elements, hasMember elemens are not allowed",
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
          "reference" : "StructureDefinition/ch-lab-patient"
        },
        "name" : "CH LAB-Report Patient",
        "description" : "This profile constrains the Patient resource for the purpose of laboratory test reports in Switzerland.",
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
          "reference" : "StructureDefinition/ch-lab-practitioner"
        },
        "name" : "CH LAB-Report Practitioner",
        "description" : "This profile constrains the Practitioner resource for the purpose of laboratory test reports in Switzerland.",
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
          "reference" : "StructureDefinition/ch-lab-practitionerrole"
        },
        "name" : "CH LAB-Report PractitionerRole",
        "description" : "This profile constrains the PractitionerRole resource for the purpose of laboratory test reports in Switzerland.",
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
          "reference" : "StructureDefinition/ch-lab-report-servicerequest"
        },
        "name" : "CH LAB-Report ServiceRequest: Laboratory Order",
        "description" : "This profile constrains the ServiceRequest resource for the purpose of laboratory orders in Switzerland.",
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
          "reference" : "StructureDefinition/ch-lab-specimen"
        },
        "name" : "CH LAB-Report Specimen",
        "description" : "This profile constrains the Specimen resource for the purpose of laboratory test reports in Switzerland.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Device"
          }
        ],
        "reference" : {
          "reference" : "Device/Combur-Test"
        },
        "name" : "Combur Urin Test Streifen - Device",
        "description" : "Example of a laboratory Testkit",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-device-test-kit"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Substance"
          }
        ],
        "reference" : {
          "reference" : "Substance/EDTA"
        },
        "name" : "Dipotassium EDTA (ethylenediaminetetraacetate)",
        "description" : "Specimen Additive Substance EDTA",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-specimen-additive-substance"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ExampleObservationRBC"
        },
        "name" : "Erythrocyte Count",
        "description" : "Red blood Cells Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-rbc"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ExampleObservationRDW-SD"
        },
        "name" : "Erythrocyte Distribution Width",
        "description" : "RDW-SD Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-ery-distribution-width"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ExampleObservationRDW-CV"
        },
        "name" : "Erythrocyte Distribution Width Ratio",
        "description" : "RDW-CV Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-ery-distribution-width"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Estimated-GFR"
        },
        "name" : "Example of estimated Glomerulum Filtration Rate",
        "description" : "eGFR",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ObservationPanel"
        },
        "name" : "Example of Observation Result Panel",
        "description" : "Contains nested Laboratory observation results",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-panel"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Result-egfr-cr-ckd-epi-2021"
        },
        "name" : "Example of Result eGFR-cr CKD-EPI 2021",
        "description" : "eGFR-cr CKD-EPI 2021 based on Creatinin",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2021"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Result-egfr-cr-cys-ckd-epi-2021"
        },
        "name" : "Example of Result eGFR-cr-cys CKD-EPI 2021",
        "description" : "eGFR-cr-cys CKD-EPI 2021 based on Creatinine and Cystatin C",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2021"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ExampleObservationHt"
        },
        "name" : "Hematocrit",
        "description" : "Hematocrit Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-ht"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Hematocrit"
        },
        "name" : "Hematocrit",
        "description" : "Single Laboratory Test Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-single-test"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ExampleObservationHb"
        },
        "name" : "Hemoglobin",
        "description" : "Hemoglobin Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-hb"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Hemoglobin"
        },
        "name" : "Hemoglobin",
        "description" : "Single Laboratory Test Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ChLab-observation-single-test"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ExampleObservationWBC"
        },
        "name" : "Leucocyte Count",
        "description" : "White blood Cells Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-wbc"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ExampleObservationMCH"
        },
        "name" : "MCH",
        "description" : "MCH Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-mch"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ExampleObservationMCHC"
        },
        "name" : "MCHC",
        "description" : "MCHC Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-mchc"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ExampleObservationMCV"
        },
        "name" : "MCV",
        "description" : "MCV Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-mcv"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ExampleObservationCBCPanel"
        },
        "name" : "Observation CBC panel using 'hasMember'",
        "description" : "Example to illustrate ChLabObservationCBCPanel",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-cbc-panel"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ObservationRenalInsufficiencyPanel"
        },
        "name" : "Observation Results: Renal Insufficiency Panel",
        "description" : "Panel containing Laboratory Results in case of Renal Insufficiency",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-renal-insufficiency-panel"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Observation-eGFR-CKD-EPI-2009-cr"
        },
        "name" : "Observation-eGFR-CKD-EPI-2009-cr",
        "description" : "Example of an Observation Instance with component.referenceRange",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2009"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Observation-eGFR-CKD-EPI-2009-cr-cys"
        },
        "name" : "Observation-eGFR-CKD-EPI-2009-cr-cys",
        "description" : "Example of an Observation Instance with component.referenceRange",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-ckd-epi-2009"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Observation-eGFR-MDRD-female"
        },
        "name" : "Observation-eGFR-MDRD-female",
        "description" : "Example of an Observation Instance with component.referenceRange",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-mdrd"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Observation-eGFR-MDRD-male"
        },
        "name" : "Observation-eGFR-MDRD-male",
        "description" : "Example of an Observation Instance with component.referenceRange",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-egfr-mdrd"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ExampleObservationPlateletCount"
        },
        "name" : "Platelet Count",
        "description" : "Platelet Count Result",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-results-platelets"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/Result-CBC"
        },
        "name" : "Result CBC Panel - Blood by Automated count, Results in sliced component",
        "description" : "laboratory result of automated Count of Blood Cells, Sysmex XN RunScreen",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-observation-cbc"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Device"
          }
        ],
        "reference" : {
          "reference" : "Device/523fa1b9-f24d-4ae6-aa98-92d7f57b2066"
        },
        "name" : "Roche CARDIAC D-Dimer Testkit",
        "description" : "Example of a laboratory Testkit",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-device-test-kit"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Device"
          }
        ],
        "reference" : {
          "reference" : "Device/3b9c6849-cf71-45e9-9d88-31f7879342f0"
        },
        "name" : "Sysmex XP-300",
        "description" : "Example of a Hematology Analyzer",
        "exampleCanonical" : "http://fhir.ch/ig/ch-lab-report/StructureDefinition/ch-lab-report-device-analyzer"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Specimen"
          }
        ],
        "reference" : {
          "reference" : "Specimen/Urin"
        },
        "name" : "Urin",
        "description" : "Specimen EU Laboratory",
        "exampleBoolean" : true
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
              "valueUrl" : "usecases.html"
            }
          ],
          "nameUrl" : "usecases.html",
          "title" : "Usecases",
          "generation" : "markdown",
          "page" : [
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
                  "valueUrl" : "usecases-en.html"
                }
              ],
              "nameUrl" : "usecases-en.html",
              "title" : "Use Cases in English",
              "generation" : "markdown"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
                  "valueUrl" : "usecases-fr.html"
                }
              ],
              "nameUrl" : "usecases-fr.html",
              "title" : "Use Cases in French",
              "generation" : "markdown"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
                  "valueUrl" : "usecases-ge.html"
                }
              ],
              "nameUrl" : "usecases-ge.html",
              "title" : "Use Cases in German",
              "generation" : "markdown"
            },
            {
              "extension" : [
                {
                  "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
                  "valueUrl" : "usecases-it.html"
                }
              ],
              "nameUrl" : "usecases-it.html",
              "title" : "Use Cases in Italian",
              "generation" : "markdown"
            }
          ]
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
              "valueUrl" : "guidance.html"
            }
          ],
          "nameUrl" : "guidance.html",
          "title" : "Guidance",
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
