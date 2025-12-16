# Artifacts Summary - CH LAB-Report (R4) v2.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH LAB Observation Results: eGFR](StructureDefinition-ch-lab-observation-egfr.md) | Renal function can be determined by laboratory measurement of serum creatinine, from which the estimated glomerular filtration rate (eGFR) can be calculated. |
| [CH LAB Observation Results: eGFR-CKD-EPI(ASR) 2009 Profile for blacks and non-blacks](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2009.md) | Renal function can be determined by laboratory measurement of serum creatinine, from which the estimated glomerular (eGFR_CKD_EPI) filtration rate can be calculated. Further input parameters are age, race, gender, body height and weight.Use[this calculator:](https://nierenrechner.de/index.php?page=egfr-ckd-rechner)or[GFR Calculators:](http://www.mdrd.com/) |
| [CH LAB-Report Additive Substance](StructureDefinition-ch-lab-specimen-additive-substance.md) | This profile defines how to represent Specimen Additive Substances in HL7 FHIR for the purpose of this guide. |
| [CH LAB-Report Composition: Laboratory Report](StructureDefinition-ch-lab-report-composition.md) | This profile constrains the Composition resource for the purpose of laboratory test reports in Switzerland. |
| [CH LAB-Report Device: Analyzer](StructureDefinition-ch-lab-report-device-analyzer.md) | Holds Laboratory Analyzer Data. |
| [CH LAB-Report Device: TestKit](StructureDefinition-ch-lab-report-device-test-kit.md) | Holds Laboratory Test-Kit Data. |
| [CH LAB-Report DiagnosticReport: Laboratory Report](StructureDefinition-ch-lab-diagnosticreport.md) | This profile constrains the DiagnosticReport resource for the purpose of laboratory test reports in Switzerland. |
| [CH LAB-Report Document: Laboratory Report](StructureDefinition-ch-lab-report-document.md) | This profile constrains the Bundle resource for the purpose of laboratory test reports in Switzerland. |
| [CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in nested Profiles](StructureDefinition-ch-lab-observation-cbc-panel.md) | This panel is the traditional hemogram plus platelet count which must now be reported with with hemograms according to current US re-imbursement rule The panel includes 2 different RDWs to accommodate the two different ways of reporting them. (Most automated instruments report as a percent ). The hemoglobin produced by the automatic counters does not use a counting method to generate the hemoglobin so we have used the fotometry version of hemoglobin in this panel. |
| [CH LAB-Report Observation Results CBC Panel - Blood by Automated count, Results in sliced component](StructureDefinition-ch-lab-observation-cbc.md) | Profile for observation laboratory result of automated Count of Blood Cells. We choose as Unit 10⁹/L or 10¹²/L for Cell Count. |
| [CH LAB-Report Observation Results: Albumin/Creatinine Ratio in Urine](StructureDefinition-ch-lab-observation-albumin-creatinine-urine-ratio.md) | This profile constrains the ChLabObservationSingleTest profile determine ratio of the concentration of albumin and creatinine in urine. |
| [CH LAB-Report Observation Results: Blood Group](StructureDefinition-ch-lab-observation-blood-group.md) | Profile to report Blood Group and RhD data. In addition to the code element valuesets delivered from EU Laboratory we have added 3 supplement value sets: CH LAB-Report BloodGroup Antibody Screen Test Result, CH LAB-Report BloodGroup Antibody Result, CH LAB-Report BloodGroup Immunohematology Tests. These value sets have a candidate binding, i.e. they are candidates to substitute general value sets in some defined situations. |
| [CH LAB-Report Observation Results: Erythrocyte distribution width by Automated count](StructureDefinition-ch-lab-observation-results-ery-distribution-width.md) | This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory Erythrocyte Distribuition Width in Switzerland. |
| [CH LAB-Report Observation Results: ErythrocyteCount](StructureDefinition-ch-lab-observation-results-rbc.md) | This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory erythrocyte count. |
| [CH LAB-Report Observation Results: Hemoglobin](StructureDefinition-ch-lab-observation-results-hb.md) | This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory hemoglobin. |
| [CH LAB-Report Observation Results: Hemotocrit](StructureDefinition-ch-lab-observation-results-ht.md) | This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory hemotocrit in Switzerland. |
| [CH LAB-Report Observation Results: Laboratory Report](StructureDefinition-ch-lab-observation-results-laboratory.md) | This profile constrains the Observation resource for the purpose of laboratory test reports in Switzerland. |
| [CH LAB-Report Observation Results: LeucocyteCount](StructureDefinition-ch-lab-observation-results-wbc.md) | This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory leucocyte count. |
| [CH LAB-Report Observation Results: Mean Corpuscular Hemoglobin Concentration MCHC](StructureDefinition-ch-lab-observation-results-mchc.md) | This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory MCHC in Switzerland. |
| [CH LAB-Report Observation Results: Mean Corpuscular Hemoglobin MCH](StructureDefinition-ch-lab-observation-results-mch.md) | This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory MCH in Switzerland. |
| [CH LAB-Report Observation Results: MeanCorpuscularVolume MCV](StructureDefinition-ch-lab-observation-results-mcv.md) | This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory MCV. |
| [CH LAB-Report Observation Results: Panel](StructureDefinition-ChLab-observation-panel.md) | This profile constrains the ChLabObservationResultsLaboratory profile to represent only a panel / battery of laboratory test results for the HL7 Swiss project. The top-level observation contains only further observations-panels and observations-single-tests in the hasMember element. The observation-panels may carry a conclusion in the note element and/or a global interpretation by the producer of the study, in the interpretation element; value[x] and component elements are not allowed and have to be shown in the observation-single-test profile. |
| [CH LAB-Report Observation Results: Platelet Count](StructureDefinition-ch-lab-observation-results-platelets.md) | This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory platelet count. |
| [CH LAB-Report Observation Results: Platelet Distribution Width](StructureDefinition-ch-lab-observation-results-platelets-distribution-width.md) | This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory platelet count. |
| [CH LAB-Report Observation Results: Platelet Mean Volume](StructureDefinition-ch-lab-observation-results-platelets-mean-volume.md) | This profile constrains the ChLabObservationSingleTest profile for the purpose of laboratory platelet mean volume. |
| [CH LAB-Report Observation Results: Renal Insufficiency Panel](StructureDefinition-ch-lab-observation-renal-insufficiency-panel.md) | This panel collects the lab results in relation to renal insufiency. |
| [CH LAB-Report Observation Results: Single Test](StructureDefinition-ChLab-observation-single-test.md) | This profile constrains the ChLabObservationResultsLaboratory profile to represent single test results for the HL7 Swiss project. The profile enables only value[x] and component elements, hasMember elemens are not allowed |
| [CH LAB-Report Observation Results: eGFR - MDRD Profile for male and female Patients, components for blacks and non-blacks](StructureDefinition-ch-lab-observation-egfr-mdrd.md) | Renal function can be determined by laboratory measurement of serum creatinine, from which the estimated glomerular (eGFR_MDMR) filtration rate can be calculated. Further input parameters are age, race and gender.Note: The MDRD equation is hardly used any more and is replaced by the CKD-EPI equation.[GFR Calculators:](http://www.mdrd.com/) |
| [CH LAB-Report Observation Results: eGFR-CKD-EPI(AS) 2021 Creatinin/Cystatin-C based Profile](StructureDefinition-ch-lab-observation-egfr-ckd-epi-2021.md) | Glomerular filtration rate (GFR) is considered the best overall index of kidney function; however measured GFR is not practical in the routine clinical setting. Estimated glomerular filtration rate (eGFR) is a suitable alternative and can be calculated for adults >= 18 years using an equation incorporating the patient's age, gender, and measured serum/plasma/blood creatinine only (eGFRcr) (this term) or both serum/plasma/blood creatinine and serum/plasma cystatin-C (eGFRcr-cys)[LOINC: 98979-8](https://loinc.org/98979-8/). The serum/plasma/blood creatinine value is based on a measurement procedure that is traceable to the isotope dilution mass spectrometry (IDMS) reference measurement procedure for creatinine. The 2021 CKD-EPI equations used for eGFRcr and eGFRcr-cys do not have a race term as does the older estimating equations that they replace.[https://www.nejm.org/doi/pdf/10.1056/NEJMoa2102953](https://www.nejm.org/doi/pdf/10.1056/NEJMoa2102953)There is a[corresponding calculator](https://www.kidney.org/professionals/gfr_calculator)For children below 18 y there is a[Pediatric GFR Calculator](https://www.kidney.org/professionals/kdoqi/gfr_calculatorPed) |
| [CH LAB-Report Patient](StructureDefinition-ch-lab-patient.md) | This profile constrains the Patient resource for the purpose of laboratory test reports in Switzerland. |
| [CH LAB-Report Practitioner](StructureDefinition-ch-lab-practitioner.md) | This profile constrains the Practitioner resource for the purpose of laboratory test reports in Switzerland. |
| [CH LAB-Report PractitionerRole](StructureDefinition-ch-lab-practitionerrole.md) | This profile constrains the PractitionerRole resource for the purpose of laboratory test reports in Switzerland. |
| [CH LAB-Report ServiceRequest: Laboratory Order](StructureDefinition-ch-lab-report-servicerequest.md) | This profile constrains the ServiceRequest resource for the purpose of laboratory orders in Switzerland. |
| [CH LAB-Report Specimen](StructureDefinition-ch-lab-specimen.md) | This profile constrains the Specimen resource for the purpose of laboratory test reports in Switzerland. |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH LAB-Report BloodGroup Antibody Result (SNOMED CT coded substances)](ValueSet-ch-lab-bloodgroup-antibody-vs.md) | This value set is used in the ChLabObservationBloodGroup profile. It contains results of Blood Group Antibodies (substance) coded with SNOMED CT. It is used in the ChLabObservationBloodGroup profile |
| [CH LAB-Report BloodGroup Antibody Screen Test (LOINC codes)](ValueSet-ch-lab-bloodgroup-antibody-screen-vs.md) | This value set is used in the ChLabObservationBloodGroup profile. It represents atypical IgG antibodies prior to transfusion or during pregnancy. The screening test is designed specifically to detect IgG antibodies and some IgM antibodies (non ABO) may also be detected. Antibodies detected by the antibody screen should then be identified, and a titer performed if the antibody identified is considered to be clinically significant during pregnancy. |
| [CH LAB-Report BloodGroup Immunohematology Tests (SNOMED CT coded procedures)](ValueSet-ch-lab-bloodgroup-immuno-hematology-vs.md) | This value set is used in the ChLabObservationBloodGroup profile. It contains Laboratory tests related to immunohematology |
| [CH LAB-Report Codes for Erythrocyte Distribuiton Width Test](ValueSet-observation-code-entsvol-ratio.md) | ValueSet for the allowed codes ENTVOL and RATIO |
| [CH LAB-Report Codes for eGFR (MDRD)](ValueSet-observation-code-mdrd-male-female.md) | ValueSet for the allowed eGFR among males and eGFR among females codes |
| [CH LAB-Report Codes for eGFR in CKD-EPI](ValueSet-observation-code-cdk-epi-2009.md) | ValueSet for the allowed eGFRcr and eGFRcr-cys codes among non-blacks |
| [CH LAB-Report Codes for eGFR in CKD-EPI 2021](ValueSet-observation-code-cdk-epi-2021.md) | ValueSet for the allowed eGFRcr and eGFRcr-cys codes, has no race term |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [Afinion™ 2](Device-Afinion-2.md) | Example of a Hematology Analyzer |
| [Afinion™ CRP Test](Device-729d1c62-051e-4e3a-80d4-06f861b2a794.md) | Example of a laboratory Testkit |
| [Albumin Creatinin Ratio Urin](Observation-AlbuminCreatininRatioUrin.md) | Example of Laboratory Test Result |
| [Blood CBC Sample](Specimen-BloodCBC.md) | Example for Specimen for automated CBC Examination |
| [Blood Group ABO](Observation-BloodGroupMemberABO.md) | Example reporting just blood group ABO System |
| [Blood Group ABO Rh Panel](Observation-BloodGroupPanel.md) | Example reporting Blood Group and RhD Result separately in a member and coded with SNOMED CT |
| [Blood Group Panel with Component ABO and Component Rh](Observation-BloodGroupCompAB0CompRhD.md) | Example reporting ABO group [Type] and Rh [Type] separately in a component and coded with SNOMED CT |
| [Blood Group Panel with Component ABO and Component Rh resulting Weak D](Observation-BloodGroupCompAB0CompRhDWeakD.md) | Example reporting ABO group [Type] and Rh [Type] separately in a component and coded with SNOMED CT, the latter proving weak D is in VS |
| [Blood Group Rh](Observation-BloodGroupMemberRh.md) | Example reporting just blood group Rh System |
| [Blood Group Rh combined](Observation-BloodGroupAB0RhD.md) | Example reporting Blood Group and RhD Result combined and coded with SNOMED CT |
| [Blood Group coded Result with Components ABO, RhD, Antibody Screen Test and DAT](Observation-BloodGroup-codedResult-2.md) | Example reporting ABO group [Type], Rh [Type], antibody screen test and DAT |
| [Blood Group coded Result with Components ABO, RhD, Date, Period and Antibody Results](Observation-BloodGroup-codedResult-1.md) | Example reporting ABO group [Type], Rh [Type], T + S, Antibodies |
| [Blood Group coded Result with Components Hemoglobine, ABO, RhD, Rh Phenotype and Antibody Results](Observation-BloodGroup-codedResult-3.md) | Example reporting Hemoglobin, ABO group [Type] and Rh [Type], Rhesus Phenotype and Antibodies |
| [Blood Group free Text Result with Components ABO, RhD, Antibody Screen Test and DAT](Observation-BloodGroup-freeTextResult-2.md) | Example reporting ABO group [Type], Rh [Type], antibody screen test and DAT |
| [Blood Group free Text Result with Components ABO, RhD, Date, Period and Antibody Results](Observation-BloodGroup-freeTextResult-1.md) | Example reporting ABO group [Type], Rh [Type], T + S, Antibodies |
| [Blood Group free Text Result with Components Hemoglobine, ABO, RhD, Rh Phenotype and Antibody Results](Observation-BloodGroup-freeTextResult-3.md) | Example reporting Hemoglobin, ABO group [Type] and Rh [Type], Rhesus Phenotype and Antibodies |
| [Bundle 1-tvt](Bundle-LabResultReport-1-tvt.md) | Example of a Laboratory Report for scenario deep vein thrombosis, containing Results from Hematology, Coagulation and Clinical Chemistry |
| [Bundle 2-electrophoresis](Bundle-LabResultReport-2-electrophoresis.md) | Example of a Laboratory Report containing images |
| [Bundle 3-breath-test](Bundle-LabResultReport-3-breath-test.md) | Example of a laboratory report containing scalar results in chronological order |
| [Bundle 4-sepsis](Bundle-LabResultReport-4-sepsis.md) | Example of a Laboratory Report for suspected sepsis |
| [Combur Urin Test Streifen - Device](Device-Combur-Test.md) | Example of a laboratory Testkit |
| [Dipotassium EDTA (ethylenediaminetetraacetate)](Substance-EDTA.md) | Specimen Additive Substance EDTA |
| [Erythrocyte Count](Observation-ExampleObservationRBC.md) | Red blood Cells Result |
| [Erythrocyte Distribution Width](Observation-ExampleObservationRDW-SD.md) | RDW-SD Result |
| [Erythrocyte Distribution Width Ratio](Observation-ExampleObservationRDW-CV.md) | RDW-CV Result |
| [Example of Observation Result Panel](Observation-ObservationPanel.md) | Contains nested Laboratory observation results |
| [Example of Result eGFR-cr CKD-EPI 2021](Observation-Result-egfr-cr-ckd-epi-2021.md) | eGFR-cr CKD-EPI 2021 based on Creatinin |
| [Example of Result eGFR-cr-cys CKD-EPI 2021](Observation-Result-egfr-cr-cys-ckd-epi-2021.md) | eGFR-cr-cys CKD-EPI 2021 based on Creatinine and Cystatin C |
| [Example of estimated Glomerulum Filtration Rate](Observation-Estimated-GFR.md) | eGFR |
| [Hematocrit](Observation-ExampleObservationHt.md) | Hematocrit Result |
| [Hematocrit](Observation-Hematocrit.md) | Single Laboratory Test Result |
| [Hemoglobin](Observation-ExampleObservationHb.md) | Hemoglobin Result |
| [Hemoglobin](Observation-Hemoglobin.md) | Single Laboratory Test Result |
| [Leucocyte Count](Observation-ExampleObservationWBC.md) | White blood Cells Result |
| [MCH](Observation-ExampleObservationMCH.md) | MCH Result |
| [MCHC](Observation-ExampleObservationMCHC.md) | MCHC Result |
| [MCV](Observation-ExampleObservationMCV.md) | MCV Result |
| [Observation CBC panel using 'hasMember'](Observation-ExampleObservationCBCPanel.md) | Example to illustrate ChLabObservationCBCPanel |
| [Observation Results: Renal Insufficiency Panel](Observation-ObservationRenalInsufficiencyPanel.md) | Panel containing Laboratory Results in case of Renal Insufficiency |
| [Observation-eGFR-CKD-EPI-2009-cr](Observation-Observation-eGFR-CKD-EPI-2009-cr.md) | Example of an Observation Instance with component.referenceRange |
| [Observation-eGFR-CKD-EPI-2009-cr-cys](Observation-Observation-eGFR-CKD-EPI-2009-cr-cys.md) | Example of an Observation Instance with component.referenceRange |
| [Observation-eGFR-MDRD-female](Observation-Observation-eGFR-MDRD-female.md) | Example of an Observation Instance with component.referenceRange |
| [Observation-eGFR-MDRD-male](Observation-Observation-eGFR-MDRD-male.md) | Example of an Observation Instance with component.referenceRange |
| [Platelet Count](Observation-ExampleObservationPlateletCount.md) | Platelet Count Result |
| [Result CBC Panel - Blood by Automated count, Results in sliced component](Observation-Result-CBC.md) | laboratory result of automated Count of Blood Cells, Sysmex XN RunScreen |
| [Roche CARDIAC D-Dimer Testkit](Device-523fa1b9-f24d-4ae6-aa98-92d7f57b2066.md) | Example of a laboratory Testkit |
| [Sysmex XP-300](Device-3b9c6849-cf71-45e9-9d88-31f7879342f0.md) | Example of a Hematology Analyzer |
| [Urin](Specimen-Urin.md) | Specimen EU Laboratory |

