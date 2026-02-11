# Home - CH EMED EPR v3.0.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-emed-epr/ImplementationGuide/ch.fhir.ig.ch-emed-epr | *Version*:3.0.0 |
| Draft as of 2026-02-11 | *Computable Name*:ChEmedEpr |
| **Copyright/Legal**: CC0-1.0 | |

### Introduction

The CH EMED EPR implementation guide describes the FHIR representation of the defined **documents for the exchange of medication information** in the context of [CARA's eMedication service](https://cara-ch.github.io/emed-service-guide/). This implementation guide is dependent on [CH EMED](https://fhir.ch/ig/ch-emed/index.html), [CH Core](http://fhir.ch/ig/ch-core/index.html) and [CH Term](http://fhir.ch/ig/ch-term/index.html), which describe the Swiss specific context, especially related to the Swiss EPR.

Initially this implementation guide was based on the CDA-CH-EMED eMedication ART-DECOR® specification which has been published by [eHealth Suisse](https://www.e-health-suisse.ch/en/home.html). CDA-CH-EMED defined the eMedication documents for the information exchange in the context of the EPR in Switzerland. The documents were based on the IHE Pharmacy Technical Framework modelled and specialized in the Building Block Repository CH-PHARM. Base for this modelling was the report from [IPAG eMedikation, 7.6.2017](https://www.e-health-suisse.ch/fileadmin/user_upload/Dokumente/2017/D/170607_Bericht_eMedikation_IPAG.pdf) and the work of IPAG/eHealth Suisse.

* [MTP](document_mtp.md) (Medication Treatment Plan): introducing a treatment in the plan.
* [PRE](document_pre.md) (Prescription): prescribing a medication.
* [DIS](document_dis.md) (Dispense): dispensing a medication.
* [PADV](document_padv.md) (Pharmaceutical advice): modifying the state of the treatment.
* [PML](document_pml.md) (Medication list): listing multiple entries in a single document.
* [PMLC](document_pmlc.md) (Medication card): listing the on-going treatments in an aggregated form.

Guidance pages are available to detail some parts of the profile, they are listed in the top menu.

### How to understand this IG

#### Tabs

Resources usually show these three different tabs in the main table. You should only review the **Snapshot** one.

* **Differential**: it shows differences with the parent artifact. It is only useful to authors of this IG.
* **Key**: it only contains elements that are included in summaries (a feature not used by this IG) or as **must support**.
* **Snapshot**: the tab that contains all the elements, it is the most useful one.

#### Flags

* **must support**: the [mustSupport](https://www.hl7.org/fhir/profiling.html#mustsupport) flag follows the IHE use of **R2** as defined in [Appendix Z](https://profiles.ihe.net/ITI/TF/Volume2/ch-Z.html#z.10-profiling-conventions-for-constraints-on-fhir). It demands that the content creator **must support these elements if they are known**. If the sending application has data for the element, it is required to populate the element with a non-empty value. If the value is not known, the element may be omitted. A receiving application may ignore the information conveyed by the element. A receiving application shall not raise an error solely due to the presence or absence of the element.
* **draft**/**✕**: the draft flag or '✕' symbol are used to indicate that an element has no clear use case or description and is useless in this profile. Implementers SHOULD avoid setting or reading it, as elements' meaning is undefined.
* **trial use**: the element description is being defined and implementers MAY support it.

#### Binding strengths

* **required** binding: the use of a code present in the given value set is required.
* **extensible** binding: the use of a code present in the given value set is recommended; another code can be used if it is missing.
* **example** binding: the value set is given as example.

### Download

You can also download:

* [this entire guide](full-ig.zip)
* the definition resources in [json](definitions.json.zip), [xml](definitions.xml.zip), [ttl](definitions.ttl.zip), or [csv](csvs.zip) format, or
* the example resources in [json](examples.json.zip), [xml](examples.xml.zip) or [ttl](examples.ttl.zip) format.
* the [NPM package](package.tgz) (as R4 or R4b).

The source code for this Implementation Guide can be found on GitHub: [https://github.com/CARA-ch/ch-emed-epr](https://github.com/CARA-ch/ch-emed-epr).

### Details

#### Cross-Version Analysis

This is an R4 IG. None of the features it uses are changed in R4B, so it can be used as is with R4B systems. Packages for both [R4 (ch.fhir.ig.ch-emed-epr.r4)](package.r4.tgz) and [R4B (ch.fhir.ig.ch-emed-epr.r4b)](package.r4b.tgz) are available.

#### Dependency Table






#### IP statements

This publication includes IP covered under the following statements.

* CC0-1.0

* [eCH-011 Types](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11.html): [CHEMEDEPRPatient](StructureDefinition-ch-emed-epr-patient.md)
* [eCH-011 MaritalStatus](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ech-11-maritalstatus.html): [Bundle/BundleUtc1Pml](Bundle-BundleUtc1Pml.md), [Bundle/BundleUtc6bPml](Bundle-BundleUtc6bPml.md)... Show 18 more, [Bundle/DocumentMtpCARAPMP004MarcoumarFreeTextDosage](Bundle-DocumentMtpCARAPMP004MarcoumarFreeTextDosage.md), [Bundle/DocumentMtpParacetamolCARAPMP004](Bundle-DocumentMtpParacetamolCARAPMP004.md), [Bundle/DocumentMtpParacetamolDafalganCARAPMP004](Bundle-DocumentMtpParacetamolDafalganCARAPMP004.md), [Bundle/DocumentPadvCancelParacetamolCARAPMP004](Bundle-DocumentPadvCancelParacetamolCARAPMP004.md), [Bundle/DocumentPadvChangeParacetamolCARAPMP004](Bundle-DocumentPadvChangeParacetamolCARAPMP004.md), [Bundle/DocumentPmlcCARAPMP004AxapharmParacetamol](Bundle-DocumentPmlcCARAPMP004AxapharmParacetamol.md), [Bundle/DocumentPmlcCARAPMP004DafalganEffParacetamol](Bundle-DocumentPmlcCARAPMP004DafalganEffParacetamol.md), [Bundle/DocumentPreCARAPMP004MarcoumarFreeTextDosage](Bundle-DocumentPreCARAPMP004MarcoumarFreeTextDosage.md), [Bundle/DocumentPreParacetamolAxapharmCARAPMP004](Bundle-DocumentPreParacetamolAxapharmCARAPMP004.md), [Bundle/DocumentPreParacetamolDafalganCARAPMP004](Bundle-DocumentPreParacetamolDafalganCARAPMP004.md), [Bundle/DocumentUCSF1CARAPMP004PMLCEmpty](Bundle-DocumentUCSF1CARAPMP004PMLCEmpty.md), [Bundle/DocumentUCSF2CARAPMP004MTPParacetamol](Bundle-DocumentUCSF2CARAPMP004MTPParacetamol.md), [Bundle/DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication](Bundle-DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication.md), [Bundle/DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription](Bundle-DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription.md), [Bundle/DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication](Bundle-DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication.md), [Bundle/DocumentUCSF6CARAPMP004MTPIbuprofen](Bundle-DocumentUCSF6CARAPMP004MTPIbuprofen.md), [Bundle/DocumentUCSF7CARAPMP004PREDafalgan](Bundle-DocumentUCSF7CARAPMP004PREDafalgan.md) and [Patient/PatientCARAPMP004](Patient-PatientCARAPMP004.md)
* [CH EMED EPR Paper Format Code System](CodeSystem-ch-emed-epr-paper-format-code-system.md): [CHEMEDEPRPaperFormat](ValueSet-ch-emed-epr-paper-format.md)
* [EDQM - Standard Terms](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-edqm-standardterms.html): [Bundle/BundlePml1](Bundle-BundlePml1.md), [Bundle/BundlePmlc1](Bundle-BundlePmlc1.md)... Show 56 more, [Bundle/BundleUtc6bPml](Bundle-BundleUtc6bPml.md), [Bundle/DocumentDis1](Bundle-DocumentDis1.md), [Bundle/DocumentMtp1](Bundle-DocumentMtp1.md), [Bundle/DocumentMtpCARAPMP004MarcoumarFreeTextDosage](Bundle-DocumentMtpCARAPMP004MarcoumarFreeTextDosage.md), [Bundle/DocumentMtpParacetamolCARAPMP004](Bundle-DocumentMtpParacetamolCARAPMP004.md), [Bundle/DocumentMtpParacetamolDafalganCARAPMP004](Bundle-DocumentMtpParacetamolDafalganCARAPMP004.md), [Bundle/DocumentPadv1](Bundle-DocumentPadv1.md), [Bundle/DocumentPadv2](Bundle-DocumentPadv2.md), [Bundle/DocumentPadvChangeParacetamolCARAPMP004](Bundle-DocumentPadvChangeParacetamolCARAPMP004.md), [Bundle/DocumentPmlcCARAPMP004AxapharmParacetamol](Bundle-DocumentPmlcCARAPMP004AxapharmParacetamol.md), [Bundle/DocumentPmlcCARAPMP004DafalganEffParacetamol](Bundle-DocumentPmlcCARAPMP004DafalganEffParacetamol.md), [Bundle/DocumentPre1](Bundle-DocumentPre1.md), [Bundle/DocumentPreCARAPMP004MarcoumarFreeTextDosage](Bundle-DocumentPreCARAPMP004MarcoumarFreeTextDosage.md), [Bundle/DocumentPreParacetamolAxapharmCARAPMP004](Bundle-DocumentPreParacetamolAxapharmCARAPMP004.md), [Bundle/DocumentPreParacetamolDafalganCARAPMP004](Bundle-DocumentPreParacetamolDafalganCARAPMP004.md), [Bundle/DocumentUCSF2CARAPMP004MTPParacetamol](Bundle-DocumentUCSF2CARAPMP004MTPParacetamol.md), [Bundle/DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication](Bundle-DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication.md), [Bundle/DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription](Bundle-DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription.md), [Bundle/DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication](Bundle-DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication.md), [Bundle/DocumentUCSF6CARAPMP004MTPIbuprofen](Bundle-DocumentUCSF6CARAPMP004MTPIbuprofen.md), [Bundle/DocumentUCSF7CARAPMP004PREDafalgan](Bundle-DocumentUCSF7CARAPMP004PREDafalgan.md), [CHEMEDEPRRouteOfAdministration](ValueSet-ch-emed-epr-route-of-administration.md), [Medication/MedicationMarcoumar](Medication-MedicationMarcoumar.md), [Medication/MedicationMarcoumar25TabsPackage](Medication-MedicationMarcoumar25TabsPackage.md), [Medication/MedicationNorvasc](Medication-MedicationNorvasc.md), [Medication/MedicationParacetamolAxapharm](Medication-MedicationParacetamolAxapharm.md), [Medication/MedicationParacetamolDafalganEff](Medication-MedicationParacetamolDafalganEff.md), [Medication/MedicationRamipril](Medication-MedicationRamipril.md), [Medication/MedicationTriatec](Medication-MedicationTriatec.md), [Medication/MedicationWithATC](Medication-MedicationWithATC.md), [Medication/MedicationWithTwoIngredients](Medication-MedicationWithTwoIngredients.md), [MedicationDispense/MedicationDispenseTriatecDis](MedicationDispense-MedicationDispenseTriatecDis.md), [MedicationDispense/MedicationDispenseTriatecPml](MedicationDispense-MedicationDispenseTriatecPml.md), [MedicationDispense/MedicationDispenseUSCF4DafalganDis](MedicationDispense-MedicationDispenseUSCF4DafalganDis.md), [MedicationRequest/MedicationRequestDafalganEffPre](MedicationRequest-MedicationRequestDafalganEffPre.md), [MedicationRequest/MedicationRequestDafalganEffSelfMedicationPre](MedicationRequest-MedicationRequestDafalganEffSelfMedicationPre.md), [MedicationRequest/MedicationRequestIbuprofenPre](MedicationRequest-MedicationRequestIbuprofenPre.md), [MedicationRequest/MedicationRequestMarcoumarPre](MedicationRequest-MedicationRequestMarcoumarPre.md), [MedicationRequest/MedicationRequestParacetamolAxapharmPml](MedicationRequest-MedicationRequestParacetamolAxapharmPml.md), [MedicationRequest/MedicationRequestParacetamolAxapharmPre](MedicationRequest-MedicationRequestParacetamolAxapharmPre.md), [MedicationRequest/MedicationRequestTriatecPml](MedicationRequest-MedicationRequestTriatecPml.md), [MedicationRequest/MedicationRequestTriatecPre](MedicationRequest-MedicationRequestTriatecPre.md), [MedicationStatement/MedicationStatementCardParacetamolSelfMedication](MedicationStatement-MedicationStatementCardParacetamolSelfMedication.md), [MedicationStatement/MedicationStatementCardParacetamolSelfMedicationAfterDispense](MedicationStatement-MedicationStatementCardParacetamolSelfMedicationAfterDispense.md), [MedicationStatement/MedicationStatementDafalganEffMaxDosePerPeriod](MedicationStatement-MedicationStatementDafalganEffMaxDosePerPeriod.md), [MedicationStatement/MedicationStatementDafalganEffSplitDose](MedicationStatement-MedicationStatementDafalganEffSplitDose.md), [MedicationStatement/MedicationStatementIbuprofenNoBrand](MedicationStatement-MedicationStatementIbuprofenNoBrand.md), [MedicationStatement/MedicationStatementMarcoumarFreeTextDosage](MedicationStatement-MedicationStatementMarcoumarFreeTextDosage.md), [MedicationStatement/MedicationStatementParacetamolAxapharmMtp](MedicationStatement-MedicationStatementParacetamolAxapharmMtp.md), [MedicationStatement/MedicationStatementParacetamolAxapharmPml](MedicationStatement-MedicationStatementParacetamolAxapharmPml.md), [MedicationStatement/MedicationStatementParacetamolAxapharmPmlc](MedicationStatement-MedicationStatementParacetamolAxapharmPmlc.md), [MedicationStatement/MedicationStatementParacetamolDafalganEffMtp](MedicationStatement-MedicationStatementParacetamolDafalganEffMtp.md), [MedicationStatement/MedicationStatementParacetamolDafalganEffPmlc](MedicationStatement-MedicationStatementParacetamolDafalganEffPmlc.md), [MedicationStatement/MedicationStatementParacetamolSelfMedication](MedicationStatement-MedicationStatementParacetamolSelfMedication.md), [MedicationStatement/MedicationStatementTriatecMtp](MedicationStatement-MedicationStatementTriatecMtp.md) and [MedicationStatement/MedicationStatementTriatecPadv](MedicationStatement-MedicationStatementTriatecPadv.md)
* [IHE Pharmaceutical Advice Status List](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-ihe-pharmaceuticaladvicestatuslist.html): [Bundle/BundleUtc6bPml](Bundle-BundleUtc6bPml.md), [Bundle/DocumentPadv1](Bundle-DocumentPadv1.md)... Show 9 more, [Bundle/DocumentPadv2](Bundle-DocumentPadv2.md), [Bundle/DocumentPadvCancelParacetamolCARAPMP004](Bundle-DocumentPadvCancelParacetamolCARAPMP004.md), [Bundle/DocumentPadvChangeParacetamolCARAPMP004](Bundle-DocumentPadvChangeParacetamolCARAPMP004.md), [Observation/ObservationParacetamolAxapharmPrePadvCancel](Observation-ObservationParacetamolAxapharmPrePadvCancel.md), [Observation/ObservationParacetamolAxapharmPrePadvChange](Observation-ObservationParacetamolAxapharmPrePadvChange.md), [Observation/ObservationParacetamolAxapharmPrePadvChangePml](Observation-ObservationParacetamolAxapharmPrePadvChangePml.md), [Observation/ObservationRamiprilPadv](Observation-ObservationRamiprilPadv.md), [Observation/ObservationTriatecPadv](Observation-ObservationTriatecPadv.md) and [Observation/ObservationTriatecPml](Observation-ObservationTriatecPml.md)


* ISO maintains the copyright on the country codes, and controls its use carefully. For further details see the ISO 3166 web page: [https://www.iso.org/iso-3166-country-codes.html](https://www.iso.org/iso-3166-country-codes.html)

* [ISO 3166-1 Codes for the representation of names of countries and their subdivisions — Part 1: Country code](http://terminology.hl7.org/6.5.0/CodeSystem-ISO3166Part1.html): [CHEMEDEPRAmountQuantity](StructureDefinition-ch-emed-epr-amount-quantity.md), [CHEMEDEPRAmountQuantityUnitCode](ValueSet-ch-emed-epr-amount-quantity-unit-code.md)... Show 66 more, [CHEMEDEPRAmountQuantityUnitCodeToCdTyp9](ConceptMap-CHEMEDEPRAmountQuantityUnitCodeToCdTyp9.md), [CHEMEDEPRAmountRange](StructureDefinition-ch-emed-epr-amount-range.md), [CHEMEDEPRCHUVRootOidNamingSystem](NamingSystem-ch-emed-epr-chuv-naming-system.md), [CHEMEDEPRChangedMedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-changed.md), [CHEMEDEPRChangedMedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed.md), [CHEMEDEPRCompositionMedicationCard](StructureDefinition-ch-emed-epr-composition-medicationcard.md), [CHEMEDEPRCompositionMedicationDispense](StructureDefinition-ch-emed-epr-composition-medicationdispense.md), [CHEMEDEPRCompositionMedicationList](StructureDefinition-ch-emed-epr-composition-medicationlist.md), [CHEMEDEPRCompositionMedicationPrescription](StructureDefinition-ch-emed-epr-composition-medicationprescription.md), [CHEMEDEPRCompositionMedicationTreatmentPlan](StructureDefinition-ch-emed-epr-composition-medicationtreatmentplan.md), [CHEMEDEPRCompositionPharmaceuticalAdvice](StructureDefinition-ch-emed-epr-composition-pharmaceuticaladvice.md), [CHEMEDEPRDevice](StructureDefinition-ch-emed-epr-device.md), [CHEMEDEPRDocumentMedicationCard](StructureDefinition-ch-emed-epr-document-medicationcard.md), [CHEMEDEPRDocumentMedicationDispense](StructureDefinition-ch-emed-epr-document-medicationdispense.md), [CHEMEDEPRDocumentMedicationList](StructureDefinition-ch-emed-epr-document-medicationlist.md), [CHEMEDEPRDocumentMedicationPrescription](StructureDefinition-ch-emed-epr-document-medicationprescription.md), [CHEMEDEPRDocumentMedicationTreatmentPlan](StructureDefinition-ch-emed-epr-document-medicationtreatmentplan.md), [CHEMEDEPRDocumentPharmaceuticalAdvice](StructureDefinition-ch-emed-epr-document-pharmaceuticaladvice.md), [CHEMEDEPRDosage](StructureDefinition-ch-emed-epr-dosage.md), [CHEMEDEPRDosageMedicationRequest](StructureDefinition-ch-emed-epr-dosage-medicationrequest.md), [CHEMEDEPRDosageSplit](StructureDefinition-ch-emed-epr-dosage-split.md), [CHEMEDEPREventTiming](ValueSet-ch-emed-epr-event-timing.md), [CHEMEDEPRHCIIndexCDTyp9NamingSystem](NamingSystem-ch-emed-epr-hci-index-cdtyp9-naming-system.md), [CHEMEDEPRHCIIndexCdTyp26NamingSystem](NamingSystem-ch-emed-epr-hci-index-cdtyp26-naming-system.md), [CHEMEDEPRHUGDTNIAOidNamingSystem](NamingSystem-ch-emed-epr-hug-dtnia-naming-system.md), [CHEMEDEPRHUGPIDCertNamingSystem](NamingSystem-ch-emed-epr-hug-pid-cert-naming-system.md), [CHEMEDEPRHUGPIDDevNamingSystem](NamingSystem-ch-emed-epr-hug-pid-dev-naming-system.md), [CHEMEDEPRHUGPIDFormNamingSystem](NamingSystem-cch-emed-epr-hug-pid-form-naming-system.md), [CHEMEDEPRHUGPIDProdNamingSystem](NamingSystem-ch-emed-epr-hug-pid-prod-naming-system.md), [CHEMEDEPRHUGRootOidNamingSystem](NamingSystem-ch-emed-epr-hug-root-naming-system.md), [CHEMEDEPRHUGeHealthOidNamingSystem](NamingSystem-ch-emed-epr-hug-ehealth-naming-system.md), [CHEMEDEPRMedication](StructureDefinition-ch-emed-epr-medication.md), [CHEMEDEPRMedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense.md), [CHEMEDEPRMedicationDispenseList](StructureDefinition-ch-emed-epr-medicationdispense-list.md), [CHEMEDEPRMedicationMedicationDispense](StructureDefinition-ch-emed-epr-medication-medicationdispense.md), [CHEMEDEPRMedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest.md), [CHEMEDEPRMedicationRequestChangedList](StructureDefinition-ch-emed-epr-medication-request-changed-list.md), [CHEMEDEPRMedicationRequestList](StructureDefinition-ch-emed-epr-medicationrequest-list.md), [CHEMEDEPRMedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-treatmentplan.md), [CHEMEDEPRMedicationStatementCard](StructureDefinition-ch-emed-epr-medicationstatement-card.md), [CHEMEDEPRMedicationStatementChangedList](StructureDefinition-ch-emed-epr-medicationstatement-changed-list.md), [CHEMEDEPRMedicationStatementList](StructureDefinition-ch-emed-epr-medicationstatement-list.md), [CHEMEDEPRObservation](StructureDefinition-ch-emed-epr-observation.md), [CHEMEDEPRObservationBodyWeight](StructureDefinition-ch-emed-epr-observation-body-weight.md), [CHEMEDEPRObservationList](StructureDefinition-ch-emed-epr-observation-list.md), [CHEMEDEPROrganization](StructureDefinition-ch-emed-epr-organization.md), [CHEMEDEPRPMPPIDOIDDevNamingSystem](NamingSystem-ch-emed-epr-pmp-pid-oid-dev-naming-system.md), [CHEMEDEPRPaperFormat](ValueSet-ch-emed-epr-paper-format.md), [CHEMEDEPRPaperFormatCS](CodeSystem-ch-emed-epr-paper-format-code-system.md), [CHEMEDEPRPatient](StructureDefinition-ch-emed-epr-patient.md), [CHEMEDEPRPractitioner](StructureDefinition-ch-emed-epr-practitioner.md), [CHEMEDEPRPractitionerRole](StructureDefinition-ch-emed-epr-practitionerrole.md), [CHEMEDEPRRatioAmountPerAmount](StructureDefinition-ch-emed-epr-ratio-amount-per-amount.md), [CHEMEDEPRRatioAmountPerTime](StructureDefinition-ch-emed-epr-ratio-amount-per-time.md), [CHEMEDEPRRelatedPerson](StructureDefinition-ch-emed-epr-related-person.md), [CHEMEDEPRRouteOfAdministration](ValueSet-ch-emed-epr-route-of-administration.md), [CHEMEDEPRTimeQuantity](StructureDefinition-ch-emed-epr-time-quantity.md), [CHEMEDEPRTimeQuantityUnitCode](ValueSet-ch-emed-epr-time-quantity-unit-code.md), [CHEMEDEPRTimeQuantityUnitCodeToCdTyp9](ConceptMap-CHEMEDEPRTimeQuantityUnitCodeToCdTyp9.md), [CHEMEDEPReMedoMPIIntAssigningAuthorityNamingSystem](NamingSystem-ch-emed-epr-emedo-mpi-int-naming-system.md), [CHEMEDEprActSubstanceAdminSubstitutionCode](ValueSet-ch-emed-epr-substance-admin-substitution-code.md), [CdTyp26ToRouteOfAdministrationEDQM](ConceptMap-CdTyp26ToRouteOfAdministrationEDQM.md), [CdTyp9ToCHEMEDEPRAmountQuantityUnitCode](ConceptMap-CdTyp9ToCHEMEDEPRAmountQuantityUnitCode.md), [CdTyp9ToCHEMEDEPRTimeQuantityUnitCode](ConceptMap-CdTyp9ToCHEMEDEPRTimeQuantityUnitCode.md), [ChEmedEpr](index.md) and [RouteOfAdministrationEDQMToCdTyp26](ConceptMap-RouteOfAdministrationEDQMToCdTyp26.md)


* The UCUM codes, UCUM table (regardless of format), and UCUM Specification are copyright 1999-2009, Regenstrief Institute, Inc. and the Unified Codes for Units of Measures (UCUM) Organization. All rights reserved. [https://ucum.org/trac/wiki/TermsOfUse](https://ucum.org/trac/wiki/TermsOfUse)

* [Unified Code for Units of Measure (UCUM)](http://terminology.hl7.org/6.5.0/CodeSystem-v3-ucum.html): [Bundle/BundleUtc6bPml](Bundle-BundleUtc6bPml.md), [Bundle/DocumentDis1](Bundle-DocumentDis1.md)... Show 57 more, [Bundle/DocumentMtp1](Bundle-DocumentMtp1.md), [Bundle/DocumentMtpCARAPMP004MarcoumarFreeTextDosage](Bundle-DocumentMtpCARAPMP004MarcoumarFreeTextDosage.md), [Bundle/DocumentMtpParacetamolCARAPMP004](Bundle-DocumentMtpParacetamolCARAPMP004.md), [Bundle/DocumentMtpParacetamolDafalganCARAPMP004](Bundle-DocumentMtpParacetamolDafalganCARAPMP004.md), [Bundle/DocumentPadv1](Bundle-DocumentPadv1.md), [Bundle/DocumentPadv2](Bundle-DocumentPadv2.md), [Bundle/DocumentPadvChangeParacetamolCARAPMP004](Bundle-DocumentPadvChangeParacetamolCARAPMP004.md), [Bundle/DocumentPmlcCARAPMP004AxapharmParacetamol](Bundle-DocumentPmlcCARAPMP004AxapharmParacetamol.md), [Bundle/DocumentPmlcCARAPMP004DafalganEffParacetamol](Bundle-DocumentPmlcCARAPMP004DafalganEffParacetamol.md), [Bundle/DocumentPre1](Bundle-DocumentPre1.md), [Bundle/DocumentPreCARAPMP004MarcoumarFreeTextDosage](Bundle-DocumentPreCARAPMP004MarcoumarFreeTextDosage.md), [Bundle/DocumentPreParacetamolAxapharmCARAPMP004](Bundle-DocumentPreParacetamolAxapharmCARAPMP004.md), [Bundle/DocumentPreParacetamolDafalganCARAPMP004](Bundle-DocumentPreParacetamolDafalganCARAPMP004.md), [Bundle/DocumentUCSF2CARAPMP004MTPParacetamol](Bundle-DocumentUCSF2CARAPMP004MTPParacetamol.md), [Bundle/DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication](Bundle-DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication.md), [Bundle/DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription](Bundle-DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription.md), [Bundle/DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication](Bundle-DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication.md), [Bundle/DocumentUCSF6CARAPMP004MTPIbuprofen](Bundle-DocumentUCSF6CARAPMP004MTPIbuprofen.md), [Bundle/DocumentUCSF7CARAPMP004PREDafalgan](Bundle-DocumentUCSF7CARAPMP004PREDafalgan.md), [CHEMEDEPRAmountQuantity](StructureDefinition-ch-emed-epr-amount-quantity.md), [CHEMEDEPRAmountQuantityUnitCode](ValueSet-ch-emed-epr-amount-quantity-unit-code.md), [CHEMEDEPRTimeQuantity](StructureDefinition-ch-emed-epr-time-quantity.md), [CHEMEDEPRTimeQuantityUnitCode](ValueSet-ch-emed-epr-time-quantity-unit-code.md), [Medication/MedicationMarcoumar](Medication-MedicationMarcoumar.md), [Medication/MedicationMarcoumar25TabsPackage](Medication-MedicationMarcoumar25TabsPackage.md), [Medication/MedicationNorvasc](Medication-MedicationNorvasc.md), [Medication/MedicationParacetamolAxapharm](Medication-MedicationParacetamolAxapharm.md), [Medication/MedicationParacetamolDafalganEff](Medication-MedicationParacetamolDafalganEff.md), [Medication/MedicationRamipril](Medication-MedicationRamipril.md), [Medication/MedicationTriatec](Medication-MedicationTriatec.md), [Medication/MedicationWithATC](Medication-MedicationWithATC.md), [Medication/MedicationWithTwoIngredients](Medication-MedicationWithTwoIngredients.md), [MedicationDispense/MedicationDispenseTriatecDis](MedicationDispense-MedicationDispenseTriatecDis.md), [MedicationDispense/MedicationDispenseTriatecPml](MedicationDispense-MedicationDispenseTriatecPml.md), [MedicationDispense/MedicationDispenseUSCF4DafalganDis](MedicationDispense-MedicationDispenseUSCF4DafalganDis.md), [MedicationRequest/MedicationRequestDafalganEffPre](MedicationRequest-MedicationRequestDafalganEffPre.md), [MedicationRequest/MedicationRequestDafalganEffSelfMedicationPre](MedicationRequest-MedicationRequestDafalganEffSelfMedicationPre.md), [MedicationRequest/MedicationRequestIbuprofenPre](MedicationRequest-MedicationRequestIbuprofenPre.md), [MedicationRequest/MedicationRequestMarcoumarPre](MedicationRequest-MedicationRequestMarcoumarPre.md), [MedicationRequest/MedicationRequestParacetamolAxapharmPml](MedicationRequest-MedicationRequestParacetamolAxapharmPml.md), [MedicationRequest/MedicationRequestParacetamolAxapharmPre](MedicationRequest-MedicationRequestParacetamolAxapharmPre.md), [MedicationRequest/MedicationRequestTriatecPml](MedicationRequest-MedicationRequestTriatecPml.md), [MedicationRequest/MedicationRequestTriatecPre](MedicationRequest-MedicationRequestTriatecPre.md), [MedicationStatement/MedicationStatementCardParacetamolSelfMedication](MedicationStatement-MedicationStatementCardParacetamolSelfMedication.md), [MedicationStatement/MedicationStatementCardParacetamolSelfMedicationAfterDispense](MedicationStatement-MedicationStatementCardParacetamolSelfMedicationAfterDispense.md), [MedicationStatement/MedicationStatementDafalganEffMaxDosePerPeriod](MedicationStatement-MedicationStatementDafalganEffMaxDosePerPeriod.md), [MedicationStatement/MedicationStatementDafalganEffSplitDose](MedicationStatement-MedicationStatementDafalganEffSplitDose.md), [MedicationStatement/MedicationStatementIbuprofenNoBrand](MedicationStatement-MedicationStatementIbuprofenNoBrand.md), [MedicationStatement/MedicationStatementMarcoumarFreeTextDosage](MedicationStatement-MedicationStatementMarcoumarFreeTextDosage.md), [MedicationStatement/MedicationStatementParacetamolAxapharmMtp](MedicationStatement-MedicationStatementParacetamolAxapharmMtp.md), [MedicationStatement/MedicationStatementParacetamolAxapharmPml](MedicationStatement-MedicationStatementParacetamolAxapharmPml.md), [MedicationStatement/MedicationStatementParacetamolAxapharmPmlc](MedicationStatement-MedicationStatementParacetamolAxapharmPmlc.md), [MedicationStatement/MedicationStatementParacetamolDafalganEffMtp](MedicationStatement-MedicationStatementParacetamolDafalganEffMtp.md), [MedicationStatement/MedicationStatementParacetamolDafalganEffPmlc](MedicationStatement-MedicationStatementParacetamolDafalganEffPmlc.md), [MedicationStatement/MedicationStatementParacetamolSelfMedication](MedicationStatement-MedicationStatementParacetamolSelfMedication.md), [MedicationStatement/MedicationStatementTriatecMtp](MedicationStatement-MedicationStatementTriatecMtp.md) and [MedicationStatement/MedicationStatementTriatecPadv](MedicationStatement-MedicationStatementTriatecPadv.md)


* This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact [http://www.snomed.org/snomed-ct/getsnomed-ct](http://www.snomed.org/snomed-ct/getsnomed-ct) or info@snomed.org.

* [ch-ehealth-codesystem-hpd](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-2.16.756.5.30.1.127.3.10.9.html): [CHEMEDEPRPractitionerRole](StructureDefinition-ch-emed-epr-practitionerrole.md)


* This material contains content from [LOINC](http://loinc.org). LOINC is copyright © 1995-2020, Regenstrief Institute, Inc. and the Logical Observation Identifiers Names and Codes (LOINC) Committee and is available at no cost under the [license](http://loinc.org/license). LOINC® is a registered United States trademark of Regenstrief Institute, Inc.

* [LOINC](http://terminology.hl7.org/6.5.0/CodeSystem-v3-loinc.html): [Bundle/BundlePml1](Bundle-BundlePml1.md), [Bundle/BundlePmlc1](Bundle-BundlePmlc1.md)... Show 33 more, [Bundle/BundleUtc1Pml](Bundle-BundleUtc1Pml.md), [Bundle/BundleUtc6bPml](Bundle-BundleUtc6bPml.md), [Bundle/DocumentDis1](Bundle-DocumentDis1.md), [Bundle/DocumentMtp1](Bundle-DocumentMtp1.md), [Bundle/DocumentMtpCARAPMP004MarcoumarFreeTextDosage](Bundle-DocumentMtpCARAPMP004MarcoumarFreeTextDosage.md), [Bundle/DocumentMtpParacetamolCARAPMP004](Bundle-DocumentMtpParacetamolCARAPMP004.md), [Bundle/DocumentMtpParacetamolDafalganCARAPMP004](Bundle-DocumentMtpParacetamolDafalganCARAPMP004.md), [Bundle/DocumentPadv1](Bundle-DocumentPadv1.md), [Bundle/DocumentPadv2](Bundle-DocumentPadv2.md), [Bundle/DocumentPadvCancelParacetamolCARAPMP004](Bundle-DocumentPadvCancelParacetamolCARAPMP004.md), [Bundle/DocumentPadvChangeParacetamolCARAPMP004](Bundle-DocumentPadvChangeParacetamolCARAPMP004.md), [Bundle/DocumentPmlcCARAPMP004AxapharmParacetamol](Bundle-DocumentPmlcCARAPMP004AxapharmParacetamol.md), [Bundle/DocumentPmlcCARAPMP004DafalganEffParacetamol](Bundle-DocumentPmlcCARAPMP004DafalganEffParacetamol.md), [Bundle/DocumentPre1](Bundle-DocumentPre1.md), [Bundle/DocumentPreCARAPMP004MarcoumarFreeTextDosage](Bundle-DocumentPreCARAPMP004MarcoumarFreeTextDosage.md), [Bundle/DocumentPreParacetamolAxapharmCARAPMP004](Bundle-DocumentPreParacetamolAxapharmCARAPMP004.md), [Bundle/DocumentPreParacetamolDafalganCARAPMP004](Bundle-DocumentPreParacetamolDafalganCARAPMP004.md), [Bundle/DocumentUCSF1CARAPMP004PMLCEmpty](Bundle-DocumentUCSF1CARAPMP004PMLCEmpty.md), [Bundle/DocumentUCSF2CARAPMP004MTPParacetamol](Bundle-DocumentUCSF2CARAPMP004MTPParacetamol.md), [Bundle/DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication](Bundle-DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication.md), [Bundle/DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription](Bundle-DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription.md), [Bundle/DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication](Bundle-DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication.md), [Bundle/DocumentUCSF6CARAPMP004MTPIbuprofen](Bundle-DocumentUCSF6CARAPMP004MTPIbuprofen.md), [Bundle/DocumentUCSF7CARAPMP004PREDafalgan](Bundle-DocumentUCSF7CARAPMP004PREDafalgan.md), [CHEMEDEPRCompositionMedicationCard](StructureDefinition-ch-emed-epr-composition-medicationcard.md), [CHEMEDEPRCompositionMedicationDispense](StructureDefinition-ch-emed-epr-composition-medicationdispense.md), [CHEMEDEPRCompositionMedicationList](StructureDefinition-ch-emed-epr-composition-medicationlist.md), [CHEMEDEPRCompositionMedicationPrescription](StructureDefinition-ch-emed-epr-composition-medicationprescription.md), [CHEMEDEPRCompositionMedicationTreatmentPlan](StructureDefinition-ch-emed-epr-composition-medicationtreatmentplan.md), [CHEMEDEPRCompositionPharmaceuticalAdvice](StructureDefinition-ch-emed-epr-composition-pharmaceuticaladvice.md), [CHEMEDEPRObservationBodyWeight](StructureDefinition-ch-emed-epr-observation-body-weight.md), [Composition/Inline-composition-for-utc-1-pml](Composition-Inline-composition-for-utc-1-pml.md) and [Composition/Inline-composition-for-utc-6b-pml](Composition-Inline-composition-for-utc-6b-pml.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* [SNOMED Clinical Terms&reg; (SNOMED CT&reg;)](http://hl7.org/fhir/R4/codesystem-snomedct.html): [Bundle/BundlePml1](Bundle-BundlePml1.md), [Bundle/BundlePmlc1](Bundle-BundlePmlc1.md)... Show 71 more, [Bundle/BundleUtc1Pml](Bundle-BundleUtc1Pml.md), [Bundle/BundleUtc6bPml](Bundle-BundleUtc6bPml.md), [Bundle/DocumentDis1](Bundle-DocumentDis1.md), [Bundle/DocumentMtp1](Bundle-DocumentMtp1.md), [Bundle/DocumentMtpCARAPMP004MarcoumarFreeTextDosage](Bundle-DocumentMtpCARAPMP004MarcoumarFreeTextDosage.md), [Bundle/DocumentMtpParacetamolCARAPMP004](Bundle-DocumentMtpParacetamolCARAPMP004.md), [Bundle/DocumentMtpParacetamolDafalganCARAPMP004](Bundle-DocumentMtpParacetamolDafalganCARAPMP004.md), [Bundle/DocumentPadv1](Bundle-DocumentPadv1.md), [Bundle/DocumentPadv2](Bundle-DocumentPadv2.md), [Bundle/DocumentPadvCancelParacetamolCARAPMP004](Bundle-DocumentPadvCancelParacetamolCARAPMP004.md), [Bundle/DocumentPadvChangeParacetamolCARAPMP004](Bundle-DocumentPadvChangeParacetamolCARAPMP004.md), [Bundle/DocumentPmlcCARAPMP004AxapharmParacetamol](Bundle-DocumentPmlcCARAPMP004AxapharmParacetamol.md), [Bundle/DocumentPmlcCARAPMP004DafalganEffParacetamol](Bundle-DocumentPmlcCARAPMP004DafalganEffParacetamol.md), [Bundle/DocumentPre1](Bundle-DocumentPre1.md), [Bundle/DocumentPreCARAPMP004MarcoumarFreeTextDosage](Bundle-DocumentPreCARAPMP004MarcoumarFreeTextDosage.md), [Bundle/DocumentPreParacetamolAxapharmCARAPMP004](Bundle-DocumentPreParacetamolAxapharmCARAPMP004.md), [Bundle/DocumentPreParacetamolDafalganCARAPMP004](Bundle-DocumentPreParacetamolDafalganCARAPMP004.md), [Bundle/DocumentUCSF1CARAPMP004PMLCEmpty](Bundle-DocumentUCSF1CARAPMP004PMLCEmpty.md), [Bundle/DocumentUCSF2CARAPMP004MTPParacetamol](Bundle-DocumentUCSF2CARAPMP004MTPParacetamol.md), [Bundle/DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication](Bundle-DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication.md), [Bundle/DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription](Bundle-DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription.md), [Bundle/DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication](Bundle-DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication.md), [Bundle/DocumentUCSF6CARAPMP004MTPIbuprofen](Bundle-DocumentUCSF6CARAPMP004MTPIbuprofen.md), [Bundle/DocumentUCSF7CARAPMP004PREDafalgan](Bundle-DocumentUCSF7CARAPMP004PREDafalgan.md), [CHEMEDEPRAmountQuantity](StructureDefinition-ch-emed-epr-amount-quantity.md), [CHEMEDEPRAmountQuantityUnitCode](ValueSet-ch-emed-epr-amount-quantity-unit-code.md), [CHEMEDEPRCompositionMedicationCard](StructureDefinition-ch-emed-epr-composition-medicationcard.md), [CHEMEDEPRCompositionMedicationDispense](StructureDefinition-ch-emed-epr-composition-medicationdispense.md), [CHEMEDEPRCompositionMedicationList](StructureDefinition-ch-emed-epr-composition-medicationlist.md), [CHEMEDEPRCompositionMedicationPrescription](StructureDefinition-ch-emed-epr-composition-medicationprescription.md), [CHEMEDEPRCompositionMedicationTreatmentPlan](StructureDefinition-ch-emed-epr-composition-medicationtreatmentplan.md), [CHEMEDEPRCompositionPharmaceuticalAdvice](StructureDefinition-ch-emed-epr-composition-pharmaceuticaladvice.md), [CHEMEDEPRPractitionerRole](StructureDefinition-ch-emed-epr-practitionerrole.md), [Composition/Inline-composition-for-utc-1-pml](Composition-Inline-composition-for-utc-1-pml.md), [Composition/Inline-composition-for-utc-6b-pml](Composition-Inline-composition-for-utc-6b-pml.md), [Device/DevicePmp](Device-DevicePmp.md), [Medication/MedicationIbuprofen](Medication-MedicationIbuprofen.md), [Medication/MedicationMarcoumar](Medication-MedicationMarcoumar.md), [Medication/MedicationMarcoumar25TabsPackage](Medication-MedicationMarcoumar25TabsPackage.md), [Medication/MedicationNorvasc](Medication-MedicationNorvasc.md), [Medication/MedicationParacetamolAxapharm](Medication-MedicationParacetamolAxapharm.md), [Medication/MedicationParacetamolDafalganEff](Medication-MedicationParacetamolDafalganEff.md), [Medication/MedicationRamipril](Medication-MedicationRamipril.md), [Medication/MedicationTriatec](Medication-MedicationTriatec.md), [Medication/MedicationWithATC](Medication-MedicationWithATC.md), [Medication/MedicationWithTwoIngredients](Medication-MedicationWithTwoIngredients.md), [MedicationDispense/MedicationDispenseTriatecDis](MedicationDispense-MedicationDispenseTriatecDis.md), [MedicationDispense/MedicationDispenseTriatecPml](MedicationDispense-MedicationDispenseTriatecPml.md), [MedicationDispense/MedicationDispenseUSCF4DafalganDis](MedicationDispense-MedicationDispenseUSCF4DafalganDis.md), [MedicationRequest/MedicationRequestDafalganEffPre](MedicationRequest-MedicationRequestDafalganEffPre.md), [MedicationRequest/MedicationRequestDafalganEffSelfMedicationPre](MedicationRequest-MedicationRequestDafalganEffSelfMedicationPre.md), [MedicationRequest/MedicationRequestIbuprofenPre](MedicationRequest-MedicationRequestIbuprofenPre.md), [MedicationRequest/MedicationRequestMarcoumarPre](MedicationRequest-MedicationRequestMarcoumarPre.md), [MedicationRequest/MedicationRequestParacetamolAxapharmPml](MedicationRequest-MedicationRequestParacetamolAxapharmPml.md), [MedicationRequest/MedicationRequestParacetamolAxapharmPre](MedicationRequest-MedicationRequestParacetamolAxapharmPre.md), [MedicationRequest/MedicationRequestTriatecPml](MedicationRequest-MedicationRequestTriatecPml.md), [MedicationRequest/MedicationRequestTriatecPre](MedicationRequest-MedicationRequestTriatecPre.md), [MedicationStatement/MedicationStatementCardParacetamolSelfMedication](MedicationStatement-MedicationStatementCardParacetamolSelfMedication.md), [MedicationStatement/MedicationStatementCardParacetamolSelfMedicationAfterDispense](MedicationStatement-MedicationStatementCardParacetamolSelfMedicationAfterDispense.md), [MedicationStatement/MedicationStatementDafalganEffMaxDosePerPeriod](MedicationStatement-MedicationStatementDafalganEffMaxDosePerPeriod.md), [MedicationStatement/MedicationStatementDafalganEffSplitDose](MedicationStatement-MedicationStatementDafalganEffSplitDose.md), [MedicationStatement/MedicationStatementIbuprofenNoBrand](MedicationStatement-MedicationStatementIbuprofenNoBrand.md), [MedicationStatement/MedicationStatementMarcoumarFreeTextDosage](MedicationStatement-MedicationStatementMarcoumarFreeTextDosage.md), [MedicationStatement/MedicationStatementParacetamolAxapharmMtp](MedicationStatement-MedicationStatementParacetamolAxapharmMtp.md), [MedicationStatement/MedicationStatementParacetamolAxapharmPml](MedicationStatement-MedicationStatementParacetamolAxapharmPml.md), [MedicationStatement/MedicationStatementParacetamolAxapharmPmlc](MedicationStatement-MedicationStatementParacetamolAxapharmPmlc.md), [MedicationStatement/MedicationStatementParacetamolDafalganEffMtp](MedicationStatement-MedicationStatementParacetamolDafalganEffMtp.md), [MedicationStatement/MedicationStatementParacetamolDafalganEffPmlc](MedicationStatement-MedicationStatementParacetamolDafalganEffPmlc.md), [MedicationStatement/MedicationStatementParacetamolSelfMedication](MedicationStatement-MedicationStatementParacetamolSelfMedication.md), [MedicationStatement/MedicationStatementTriatecMtp](MedicationStatement-MedicationStatementTriatecMtp.md) and [MedicationStatement/MedicationStatementTriatecPadv](MedicationStatement-MedicationStatementTriatecPadv.md)


* This material derives from the HL7 Terminology (THO). THO is copyright ©1989+ Health Level Seven International and is made available under the CC0 designation. For more licensing information see: [https://terminology.hl7.org/license.html](https://terminology.hl7.org/license.html)

* [identifierType](http://terminology.hl7.org/7.0.1/CodeSystem-v2-0203.html): [Bundle/BundlePml1](Bundle-BundlePml1.md), [Bundle/BundlePmlc1](Bundle-BundlePmlc1.md)... Show 27 more, [Bundle/BundleUtc1Pml](Bundle-BundleUtc1Pml.md), [Bundle/BundleUtc6bPml](Bundle-BundleUtc6bPml.md), [Bundle/DocumentDis1](Bundle-DocumentDis1.md), [Bundle/DocumentMtp1](Bundle-DocumentMtp1.md), [Bundle/DocumentMtpCARAPMP004MarcoumarFreeTextDosage](Bundle-DocumentMtpCARAPMP004MarcoumarFreeTextDosage.md), [Bundle/DocumentMtpParacetamolCARAPMP004](Bundle-DocumentMtpParacetamolCARAPMP004.md), [Bundle/DocumentMtpParacetamolDafalganCARAPMP004](Bundle-DocumentMtpParacetamolDafalganCARAPMP004.md), [Bundle/DocumentPadv1](Bundle-DocumentPadv1.md), [Bundle/DocumentPadv2](Bundle-DocumentPadv2.md), [Bundle/DocumentPadvCancelParacetamolCARAPMP004](Bundle-DocumentPadvCancelParacetamolCARAPMP004.md), [Bundle/DocumentPadvChangeParacetamolCARAPMP004](Bundle-DocumentPadvChangeParacetamolCARAPMP004.md), [Bundle/DocumentPmlcCARAPMP004AxapharmParacetamol](Bundle-DocumentPmlcCARAPMP004AxapharmParacetamol.md), [Bundle/DocumentPmlcCARAPMP004DafalganEffParacetamol](Bundle-DocumentPmlcCARAPMP004DafalganEffParacetamol.md), [Bundle/DocumentPre1](Bundle-DocumentPre1.md), [Bundle/DocumentPreCARAPMP004MarcoumarFreeTextDosage](Bundle-DocumentPreCARAPMP004MarcoumarFreeTextDosage.md), [Bundle/DocumentPreParacetamolAxapharmCARAPMP004](Bundle-DocumentPreParacetamolAxapharmCARAPMP004.md), [Bundle/DocumentPreParacetamolDafalganCARAPMP004](Bundle-DocumentPreParacetamolDafalganCARAPMP004.md), [Bundle/DocumentUCSF1CARAPMP004PMLCEmpty](Bundle-DocumentUCSF1CARAPMP004PMLCEmpty.md), [Bundle/DocumentUCSF2CARAPMP004MTPParacetamol](Bundle-DocumentUCSF2CARAPMP004MTPParacetamol.md), [Bundle/DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication](Bundle-DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication.md), [Bundle/DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription](Bundle-DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription.md), [Bundle/DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication](Bundle-DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication.md), [Bundle/DocumentUCSF6CARAPMP004MTPIbuprofen](Bundle-DocumentUCSF6CARAPMP004MTPIbuprofen.md), [Bundle/DocumentUCSF7CARAPMP004PREDafalgan](Bundle-DocumentUCSF7CARAPMP004PREDafalgan.md), [CHEMEDEPRPatient](StructureDefinition-ch-emed-epr-patient.md), [Patient/PatientCARAPMP004](Patient-PatientCARAPMP004.md) and [Patient/PatientDupont](Patient-PatientDupont.md)
* [RoleCode](http://terminology.hl7.org/7.0.1/CodeSystem-v3-RoleCode.html): [CHEMEDEPRPatient](StructureDefinition-ch-emed-epr-patient.md)
* [Substance Admin Substitution](http://terminology.hl7.org/7.0.1/CodeSystem-v3-substanceAdminSubstitution.html): [CHEMEDEPRChangedMedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest-changed.md), [CHEMEDEPRChangedMedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-changed.md)... Show 10 more, [CHEMEDEPRMedicationDispense](StructureDefinition-ch-emed-epr-medicationdispense.md), [CHEMEDEPRMedicationDispenseList](StructureDefinition-ch-emed-epr-medicationdispense-list.md), [CHEMEDEPRMedicationRequest](StructureDefinition-ch-emed-epr-medicationrequest.md), [CHEMEDEPRMedicationRequestChangedList](StructureDefinition-ch-emed-epr-medication-request-changed-list.md), [CHEMEDEPRMedicationRequestList](StructureDefinition-ch-emed-epr-medicationrequest-list.md), [CHEMEDEPRMedicationStatement](StructureDefinition-ch-emed-epr-medicationstatement-treatmentplan.md), [CHEMEDEPRMedicationStatementCard](StructureDefinition-ch-emed-epr-medicationstatement-card.md), [CHEMEDEPRMedicationStatementChangedList](StructureDefinition-ch-emed-epr-medicationstatement-changed-list.md), [CHEMEDEPRMedicationStatementList](StructureDefinition-ch-emed-epr-medicationstatement-list.md) and [CHEMEDEprActSubstanceAdminSubstitutionCode](ValueSet-ch-emed-epr-substance-admin-substitution-code.md)


#### Global profiles

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-emed-epr",
  "url" : "http://fhir.ch/ig/ch-emed-epr/ImplementationGuide/ch.fhir.ig.ch-emed-epr",
  "version" : "3.0.0",
  "name" : "ChEmedEpr",
  "title" : "CH EMED EPR",
  "status" : "draft",
  "date" : "2026-02-11T07:11:04+00:00",
  "publisher" : "CARA",
  "contact" : [
    {
      "name" : "CARA",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.cara.ch"
        }
      ]
    }
  ],
  "description" : "FHIR Implementation Guide which defines the documents for the exchange of medication information in the context of the Swiss eMedication service",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH",
          "display" : "Switzerland"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "packageId" : "ch.fhir.ig.ch-emed-epr",
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
      "id" : "ch_fhir_ig_ch_emed",
      "uri" : "http://fhir.ch/ig/ch-emed/ImplementationGuide/ch.fhir.ig.ch-emed",
      "packageId" : "ch.fhir.ig.ch-emed",
      "version" : "6.0.0"
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
            "valueString" : "2022+"
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
            "valueString" : "logging"
          },
          {
            "url" : "value",
            "valueString" : "init"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "logging"
          },
          {
            "url" : "value",
            "valueString" : "progress"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "logging"
          },
          {
            "url" : "value",
            "valueString" : "tx"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "validation"
          },
          {
            "url" : "value",
            "valueString" : "check-aggregation"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "validation"
          },
          {
            "url" : "value",
            "valueString" : "allow-any-extensions"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "validation"
          },
          {
            "url" : "value",
            "valueString" : "show-reference-messages"
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
            "valueString" : "generate-version"
          },
          {
            "url" : "value",
            "valueString" : "r4"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueString" : "bundle-references-resolve"
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
            "valueString" : "generate"
          },
          {
            "url" : "value",
            "valueString" : "genExamples"
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
            "valueString" : "http://fhir.ch/ig/ch-emed-epr/history.html"
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
        "valueCode" : "hl7.fhir.uv.tools.r4#0.9.0"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "copyrightyear"
          },
          {
            "url" : "value",
            "valueString" : "2022+"
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
            "valueCode" : "logging"
          },
          {
            "url" : "value",
            "valueString" : "init"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "logging"
          },
          {
            "url" : "value",
            "valueString" : "progress"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "logging"
          },
          {
            "url" : "value",
            "valueString" : "tx"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "validation"
          },
          {
            "url" : "value",
            "valueString" : "check-aggregation"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "validation"
          },
          {
            "url" : "value",
            "valueString" : "allow-any-extensions"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "validation"
          },
          {
            "url" : "value",
            "valueString" : "show-reference-messages"
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
            "valueCode" : "generate-version"
          },
          {
            "url" : "value",
            "valueString" : "r4"
          }
        ],
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-parameter"
      },
      {
        "extension" : [
          {
            "url" : "code",
            "valueCode" : "bundle-references-resolve"
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
            "valueCode" : "generate"
          },
          {
            "url" : "value",
            "valueString" : "genExamples"
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
            "valueString" : "http://fhir.ch/ig/ch-emed-epr/history.html"
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
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-amount-quantity"
        },
        "name" : "Amount Quantity",
        "description" : "A quantity with an amount unit (no time unit)",
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
          "reference" : "ValueSet/ch-emed-epr-amount-quantity-unit-code"
        },
        "name" : "Amount Quantity Unit Codes",
        "description" : "Unit Codes for amount quantity units.\n\nThese are all unit codes about amount quantities, excluding time units.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-amount-range"
        },
        "name" : "Amount Range",
        "description" : "A range of amount quantities",
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
          "reference" : "StructureDefinition/ch-emed-epr-observation-body-weight"
        },
        "name" : "Body Weight Observation",
        "description" : "Definition of the observation for the patient body weight, following the FHIR Vital Signs profile (https://www.hl7.org/fhir/R4/bodyweight.html).",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentDis1"
        },
        "name" : "Bundle: DIS 1",
        "description" : "An example of a dispense document bundle.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentUCSF4CARAPMP004DISDafalganWithoutPrescription"
        },
        "name" : "Bundle: DIS for a self-medicating dafalgan treatment.",
        "description" : "Example of a document bundle of type DIS, documenting the dispensation of a box of effervescent dafalgan for a self-medicating treatment to patient CARAPMP004.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentMtp1"
        },
        "name" : "Bundle: MTP 1",
        "description" : "The example of a Bundle for a MTP document",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationtreatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentMtpParacetamolDafalganCARAPMP004"
        },
        "name" : "Bundle: MTP Dafalgan Effervescent CARAPMP004",
        "description" : "MTP for Dafalgan effervescent paracetamol treatment for patient CARAPMP004",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationtreatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentMtpCARAPMP004MarcoumarFreeTextDosage"
        },
        "name" : "Bundle: MTP for Marcoumar tabs 3mg with free text dosage",
        "description" : "Example of an MTP bundle for Marcoumar treatment with free text dosage instructions.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationtreatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentUCSF6CARAPMP004MTPIbuprofen"
        },
        "name" : "Bundle: MTP for no branded ibuprofen.",
        "description" : "Example of a document bundle for an ibuprofen treatment (in reserve) without commercial product details.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationtreatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentUCSF2CARAPMP004MTPParacetamol"
        },
        "name" : "Bundle: MTP for self-medicating paracetamol.",
        "description" : "Example of a document bundle for a patient adding a medication treatment plan for self-medication with paracetamol.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationtreatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentMtpParacetamolCARAPMP004"
        },
        "name" : "Bundle: MTP Paracetamol CARAPMP004",
        "description" : "Initial MTP for paracetamol treatment for patient CARAPMP004",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationtreatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentPadv1"
        },
        "name" : "Bundle: PADV 1",
        "description" : "The example of a Bundle for a PADV CHANGE document",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentPadv2"
        },
        "name" : "Bundle: PADV 2",
        "description" : "The example of a Bundle for a PADV CHANGE document targetting a PRE document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentPadvCancelParacetamolCARAPMP004"
        },
        "name" : "Bundle: PADV CANCEL paracetamol Axapharm",
        "description" : "The example of a Bundle for a PADV CANCEL document for paracetamol Axapharm 1g for patient CARAPMP004",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentPadvChangeParacetamolCARAPMP004"
        },
        "name" : "Bundle: PADV CHANGE paracetamol Axapharm",
        "description" : "The example of a Bundle for a PADV CHANGE document for replacing a previous PRE of paracetamol Axapharm 1g for patient CARAPMP004 with Dafalgan eff.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/BundlePml1"
        },
        "name" : "Bundle: PML #1",
        "description" : "PML bundle example",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationlist"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentPmlcCARAPMP004AxapharmParacetamol"
        },
        "name" : "Bundle: PMLC  document with a prescribed axapharm paracetamol treatment",
        "description" : "Example of PMLC  document with a prescribed axapharm paracetamol treatment",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationcard"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentPmlcCARAPMP004DafalganEffParacetamol"
        },
        "name" : "Bundle: PMLC  document with a prescribed dafalgan effervescent paracetamol treatment",
        "description" : "Example of PMLC  document with a prescribed dafalgan effervescent paracetamol treatment",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationcard"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentUCSF1CARAPMP004PMLCEmpty"
        },
        "name" : "Bundle: PMLC  document with no treatments",
        "description" : "Example of PMLC  document for a patient without any active treatments.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationcard"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/BundlePmlc1"
        },
        "name" : "Bundle: PMLC #1",
        "description" : "PMLC bundle example",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationcard"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentUCSF3CARAPMP004PMLCDafalganSelfMedication"
        },
        "name" : "Bundle: PMLC document with Dafalgan self-medication",
        "description" : "Example of a PMLC bundle with a single treatment of self-medication with Dafalgan (paracetamol).",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationcard"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentUCSF5CARAPMP004PMLCDafalganSelfMedication"
        },
        "name" : "Bundle: PMLC document with Dafalgan self-medication",
        "description" : "Example of a PMLC bundle with a single treatment of self-medication with Dafalgan (paracetamol) after dispensation.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationcard"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentPre1"
        },
        "name" : "Bundle: PRE 1",
        "description" : "An example of a prescription document bundle.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationprescription"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentUCSF7CARAPMP004PREDafalgan"
        },
        "name" : "Bundle: PRE Dafalgan eff 500mg",
        "description" : "New PRE for paracetamol self-medication of patient CARAPMP004 with Dafalgan effervescent tablets 500mg.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationprescription"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentPreParacetamolDafalganCARAPMP004"
        },
        "name" : "Bundle: PRE Dafalgan eff 500mg",
        "description" : "New PRE for paracetamol treatment for patient CARAPMP004 with Dafalgan effervescent tablets 500mg.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationprescription"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentPreCARAPMP004MarcoumarFreeTextDosage"
        },
        "name" : "Bundle: PRE Marcoumar tabs 3mg with alternating dosage",
        "description" : "New PRE for Marcoumar tabs 3mg",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationprescription"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/DocumentPreParacetamolAxapharmCARAPMP004"
        },
        "name" : "Bundle: PRE Paracetamol Axapharm 1g",
        "description" : "Initial PRE for paracetamol treatment for patient CARAPMP004.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationprescription"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/BundleUtc1Pml"
        },
        "name" : "Bundle: use case PML #1",
        "description" : "PML pre-examination for patient CARAPMP004. No previous treatments, empty medication list.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationlist"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Bundle"
          }
        ],
        "reference" : {
          "reference" : "Bundle/BundleUtc6bPml"
        },
        "name" : "Bundle: use case PML #6b",
        "description" : "Post PADV-CHANGE PML for patient CARAPMP004.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-document-medicationlist"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/CdTyp26ToRouteOfAdministrationEDQM"
        },
        "name" : "CdTyp26 -> RouteOfAdministrationEDQM",
        "description" : "Mapping from HCI CdTyp26 route of administration codes to RouteOfAdministrationEDQM codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/CdTyp9ToCHEMEDEPRAmountQuantityUnitCode"
        },
        "name" : "CdTyp9 -> CHEMEDEPRAmountQuantityUnitCode",
        "description" : "Mapping from HCI CdTyp9 unit codes to CHEMEDEPRAmountQuantityUnitCode codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/CdTyp9ToCHEMEDEPRTimeQuantityUnitCode"
        },
        "name" : "CdTyp9 -> CHEMEDEPRTimeQuantityUnitCode",
        "description" : "Mapping from HCI CdTyp9 unit codes to CHEMEDEPRTimeQuantityUnitCode codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ch-emed-epr-hci-index-cdtyp26-naming-system"
        },
        "name" : "CH EMED EPR - HCI Index CdTyp26 Naming System",
        "description" : "Naming System of HCI's CdTyp26 (routes of administration) table.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ch-emed-epr-hci-index-cdtyp9-naming-system"
        },
        "name" : "CH EMED EPR - HCI Index CdTyp9 Naming System",
        "description" : "Naming System of HCI's CdTyp9 (unit codes) table.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ch-emed-epr-hug-dtnia-naming-system"
        },
        "name" : "CH EMED EPR - HUG DTN-IA Naming System",
        "description" : "Naming System of HUG'S DTN-IA department OID.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ch-emed-epr-pmp-pid-oid-dev-naming-system"
        },
        "name" : "CH EMED EPR - PMP-PID Assigning Authority OID dev",
        "description" : "Naming System of the PMP-PID's Assigning Authority OID on development environment.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ch-emed-epr-emedo-mpi-int-naming-system"
        },
        "name" : "CH EMED EPR CARA MPI Int Naming System",
        "description" : "Naming System for CARA's MPI assigning authority.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ch-emed-epr-chuv-naming-system"
        },
        "name" : "CH EMED EPR CHUV Root Naming System",
        "description" : "Naming System for CHUV root OID.",
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
          "reference" : "StructureDefinition/ch-emed-epr-device"
        },
        "name" : "CH EMED EPR Device",
        "description" : "Definition of the device for the eMedication context",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ch-emed-epr-hug-ehealth-naming-system"
        },
        "name" : "CH EMED EPR HUG eHealth domain Naming System",
        "description" : "Naming System of HUG's eHealth domain OID.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ch-emed-epr-hug-pid-cert-naming-system"
        },
        "name" : "CH EMED EPR HUG Patient Id Assigning Authority (cert) Naming System",
        "description" : "Naming System of HUG's local patient ids in their certification environment, used in the context of CARA's eMedication service's dev and int environments.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ch-emed-epr-hug-pid-dev-naming-system"
        },
        "name" : "CH EMED EPR HUG Patient Id Assigning Authority (dev) Naming System",
        "description" : "Naming System of HUG's local patient ids in their development environment, used in the context of CARA's eMedication service's dev and int environments.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/cch-emed-epr-hug-pid-form-naming-system"
        },
        "name" : "CH EMED EPR HUG Patient Id Assigning Authority (form) Naming System",
        "description" : "Naming System of HUG's local patient ids in their training environment (formation), used in the context of CARA's eMedication service's dev and int environments.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ch-emed-epr-hug-pid-prod-naming-system"
        },
        "name" : "CH EMED EPR HUG Patient Id Assigning Authority (prod) Naming System",
        "description" : "Naming System of HUG's local patient ids in their production environment, used in the context of CARA's eMedication service's prod environment.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "NamingSystem"
          }
        ],
        "reference" : {
          "reference" : "NamingSystem/ch-emed-epr-hug-root-naming-system"
        },
        "name" : "CH EMED EPR HUG Root Naming System",
        "description" : "Naming System for HUG root OID.",
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
          "reference" : "StructureDefinition/ch-emed-epr-medication"
        },
        "name" : "CH EMED EPR Medication",
        "description" : "Definition of the medication",
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
          "reference" : "StructureDefinition/ch-emed-epr-medication-medicationdispense"
        },
        "name" : "CH EMED EPR Medication (DIS)",
        "description" : "Definition of the medication for the medication dispense",
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
          "reference" : "StructureDefinition/ch-emed-epr-organization"
        },
        "name" : "CH EMED EPR Organization",
        "description" : "Definition of the organization for the eMedication context",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "CodeSystem"
          }
        ],
        "reference" : {
          "reference" : "CodeSystem/ch-emed-epr-paper-format-code-system"
        },
        "name" : "CH EMED EPR Paper Format Code System",
        "description" : "Possible paper formats that can be delivered by a CH EMED EPR service rendering original representations.",
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
          "reference" : "StructureDefinition/ch-emed-epr-patient"
        },
        "name" : "CH EMED EPR Patient",
        "description" : "Definition of the patient for the eMedication context",
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
          "reference" : "StructureDefinition/ch-emed-epr-practitioner"
        },
        "name" : "CH EMED EPR Practitioner",
        "description" : "Definition of the practitioner for the eMedication context",
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
          "reference" : "StructureDefinition/ch-emed-epr-practitionerrole"
        },
        "name" : "CH EMED EPR PractitionerRole",
        "description" : "Definition of the practitioner role for the eMedication context",
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
          "reference" : "StructureDefinition/ch-emed-epr-related-person"
        },
        "name" : "CH EMED EPR RelatedPerson",
        "description" : "Definition of the related person for the eMedication context",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementTriatecPadv"
        },
        "name" : "Changed Medication Statement: Triatec (PADV)",
        "description" : "The example of an changed medication statement for a PADV document",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-changed"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/CHEMEDEPRAmountQuantityUnitCodeToCdTyp9"
        },
        "name" : "CHEMEDEPRAmountQuantityUnitCode -> CdTyp9",
        "description" : "Mapping from CHEMEDEPRAmountQuantityUnitCode codes to HCI CdTyp9 unit codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/CHEMEDEPRTimeQuantityUnitCodeToCdTyp9"
        },
        "name" : "CHEMEDEPRTimeQuantityUnitCode -> CdTyp9",
        "description" : "Mapping from CHEMEDEPRTimeQuantityUnitCode codes to HCI CdTyp9 unit codes.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/Inline-composition-for-utc-1-pml"
        },
        "name" : "Composition: use case PML #1",
        "description" : "Composition for PML document for pre-examination for patient CARAPMP004. No previous treatments, empty medication list.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-composition-medicationlist"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Composition"
          }
        ],
        "reference" : {
          "reference" : "Composition/Inline-composition-for-utc-6b-pml"
        },
        "name" : "Composition: use case PML #6b",
        "description" : "Composition for PML document for post PADV-CHANGE PML for patient CARAPMP004.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-composition-medicationlist"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Device"
          }
        ],
        "reference" : {
          "reference" : "Device/DevicePmp"
        },
        "name" : "Device: PMP Aggregator",
        "description" : "Example device resource for the aggregator",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-device"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-composition-medicationdispense"
        },
        "name" : "DIS Composition",
        "description" : "Definition of the composition for the medication dispense document",
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
          "reference" : "StructureDefinition/ch-emed-epr-document-medicationdispense"
        },
        "name" : "DIS Document",
        "description" : "Definition of the bundle for the medication dispense document",
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
          "reference" : "StructureDefinition/ch-emed-epr-medicationdispense"
        },
        "name" : "DIS MedicationDispense",
        "description" : "Definition of the medication dispense for the medication dispense document",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-dosage-medicationrequest"
        },
        "name" : "Dosage (MedicationRequest)",
        "description" : "Definition of the main dosage element (used in MedicationRequest)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-dosage"
        },
        "name" : "Dosage (MedicationStatement / MedicationDispense)",
        "description" : "Definition of the main dosage element (used in MedicationStatement / MedicationDispense)",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-dosage-split"
        },
        "name" : "Dosage Split",
        "description" : "Definition of the split dosage element",
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
          "reference" : "ValueSet/ch-emed-epr-event-timing"
        },
        "name" : "Event Timings",
        "description" : "Event Timings for ambulatory use.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationTriatec"
        },
        "name" : "Medication: Triatec",
        "description" : "The example of the Triatec medication",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationDispense"
          }
        ],
        "reference" : {
          "reference" : "MedicationDispense/MedicationDispenseUSCF4DafalganDis"
        },
        "name" : "MedicationDispense: Dafalgan self-medication",
        "description" : "Example of a medication dispense in a DIS document for a dafalgan self-medication MTP.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationDispense"
          }
        ],
        "reference" : {
          "reference" : "MedicationDispense/MedicationDispenseTriatecDis"
        },
        "name" : "MedicationDispense: Triatec (DIS)",
        "description" : "Example of a medication dispense in a DIS document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationdispense"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationDispense"
          }
        ],
        "reference" : {
          "reference" : "MedicationDispense/MedicationDispenseTriatecPml"
        },
        "name" : "MedicationDispense: Triatec (PML)",
        "description" : "Example of a medication dispense in a PML document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationdispense-list"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationIbuprofen"
        },
        "name" : "MedicationIbuprofen",
        "description" : "Medication example for ibuprofen medication without any specific commercial product details.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationMarcoumar"
        },
        "name" : "MedicationMarcoumar",
        "description" : "Medication example for Marcoumar tablets 3mg - no article details",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationMarcoumar25TabsPackage"
        },
        "name" : "MedicationMarcoumar25TabsPackage",
        "description" : "Medication example for Marcoumar tablets 3mg, package of 25 tablets",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationNorvasc"
        },
        "name" : "MedicationNorvasc",
        "description" : "Example for a medication (Norvasc)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationParacetamolAxapharm"
        },
        "name" : "MedicationParacetamolAxapharm",
        "description" : "Example for Axapharm paracetamol tablets 1g",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationParacetamolDafalganEff"
        },
        "name" : "MedicationParacetamolDafalganEff",
        "description" : "Example for Dafalgan paracetamol effervescent tablets 500mg",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationRamipril"
        },
        "name" : "MedicationRamipril",
        "description" : "Medication example for Ramipril Mepha cpr 2.5mg",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationRequest"
          }
        ],
        "reference" : {
          "reference" : "MedicationRequest/MedicationRequestDafalganEffPre"
        },
        "name" : "MedicationRequest: Dafalgan effervescent 500mg (PRE)",
        "description" : "Example of a medication request in a PRE document for paracetamol Dafalgan effervescent tablets 500mg.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationrequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationRequest"
          }
        ],
        "reference" : {
          "reference" : "MedicationRequest/MedicationRequestDafalganEffSelfMedicationPre"
        },
        "name" : "MedicationRequest: Dafalgan effervescent 500mg (PRE)",
        "description" : "Example of a medication request in a PRE document for paracetamol Dafalgan effervescent tablets 500mg for a treatment added by a patient.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationrequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationRequest"
          }
        ],
        "reference" : {
          "reference" : "MedicationRequest/MedicationRequestIbuprofenPre"
        },
        "name" : "MedicationRequest: Ibuprofen no branded details (PRE)",
        "description" : "Example of a medication request in a PRE document for ibuprofen without any specific commercial product details.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationrequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationRequest"
          }
        ],
        "reference" : {
          "reference" : "MedicationRequest/MedicationRequestMarcoumarPre"
        },
        "name" : "MedicationRequest: Marcoumar 3mg tabs free text dosage",
        "description" : "Example of a medication request for Marcoumar 3mg tabs with free text dosage.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationrequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationRequest"
          }
        ],
        "reference" : {
          "reference" : "MedicationRequest/MedicationRequestParacetamolAxapharmPml"
        },
        "name" : "MedicationRequest: Paracetamol Axapharm 1g (PML)",
        "description" : "Example of a medication request from a PRE document for paracetamol Axapharm tablet 1g, conveyed within a PML document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationrequest-list"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationRequest"
          }
        ],
        "reference" : {
          "reference" : "MedicationRequest/MedicationRequestParacetamolAxapharmPre"
        },
        "name" : "MedicationRequest: Paracetamol Axapharm 1g (PRE)",
        "description" : "Example of a medication request in a PRE document for paracetamol Axapharm tablet 1g.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationrequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationRequest"
          }
        ],
        "reference" : {
          "reference" : "MedicationRequest/MedicationRequestTriatecPml"
        },
        "name" : "MedicationRequest: Triatec (PML)",
        "description" : "Example of a medication request in a PML document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationrequest-list"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationRequest"
          }
        ],
        "reference" : {
          "reference" : "MedicationRequest/MedicationRequestTriatecPre"
        },
        "name" : "MedicationRequest: Triatec (PRE)",
        "description" : "Example of a medication request in a PRE document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationrequest"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementIbuprofenNoBrand"
        },
        "name" : "MedicationStatement: ibuprofen, no brand",
        "description" : "The example of a medication statement for an ibuprofen treatment plan, without specifying commercial brand details.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementMarcoumarFreeTextDosage"
        },
        "name" : "MedicationStatement: Marcoumar cpr 3mg",
        "description" : "Example of a medication statement for a branded product (no packaging specified) Marcoumar tabs 3mg with free text dosage",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementParacetamolAxapharmMtp"
        },
        "name" : "MedicationStatement: Paracetamol Axapharm (MTP)",
        "description" : "The example of a medication statement for a medication treatment plan for Axapharm paracetamol",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementParacetamolAxapharmPml"
        },
        "name" : "MedicationStatement: Paracetamol Axapharm (PML)",
        "description" : "The example of a medication statement for a medication treatment plan for Axapharm paracetamol conveyed within a PML document",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-list"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementParacetamolAxapharmPmlc"
        },
        "name" : "MedicationStatement: Paracetamol Axapharm (PMLC)",
        "description" : "The example of a medication statement for a medication card with a single Axapharm paracetamol treatment",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-card"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementParacetamolDafalganEffMtp"
        },
        "name" : "MedicationStatement: Paracetamol Dafalgan Effervescent (MTP)",
        "description" : "The example of a medication statement for a medication treatment plan for Dafalgan effervescent paracetamol",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementDafalganEffMaxDosePerPeriod"
        },
        "name" : "MedicationStatement: Paracetamol Dafalgan Effervescent (MTP) with max dose per period",
        "description" : "The example for a medication statement with a max. dose per period.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementDafalganEffSplitDose"
        },
        "name" : "MedicationStatement: Paracetamol Dafalgan Effervescent (MTP) with split dose",
        "description" : "The example for a medication statement with split dose.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementParacetamolDafalganEffPmlc"
        },
        "name" : "MedicationStatement: Paracetamol Dafalgan Effervescent (PMLC)",
        "description" : "The example of a medication statement for a medication card with a single Dafalgan effervescent paracetamol treatment.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-card"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementParacetamolSelfMedication"
        },
        "name" : "MedicationStatement: self-medication paracetamol treatment",
        "description" : "The example for a self-medication treatment plan for paracetamol.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementTriatecMtp"
        },
        "name" : "MedicationStatement: Triatec (MTP)",
        "description" : "The example of a medication statement in a MTP document",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementCardParacetamolSelfMedication"
        },
        "name" : "MedicationStatementCard: self-medication paracetamol treatment",
        "description" : "The example for a self-medication treatment plan for paracetamol, conveyed within a PMLC document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-card"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "MedicationStatement"
          }
        ],
        "reference" : {
          "reference" : "MedicationStatement/MedicationStatementCardParacetamolSelfMedicationAfterDispense"
        },
        "name" : "MedicationStatementCard: self-medication paracetamol treatment after dispense.",
        "description" : "The example for a self-medication treatment plan for paracetamol after a dispense, conveyed within a PMLC document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medicationstatement-card"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationWithATC"
        },
        "name" : "MedicationWithATC",
        "description" : "Example for a medication with ATC code (NaraDex)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Medication"
          }
        ],
        "reference" : {
          "reference" : "Medication/MedicationWithTwoIngredients"
        },
        "name" : "MedicationWithTwoIngredients",
        "description" : "Example for a medication with two ingredients (Exforge)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-medication"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-composition-medicationtreatmentplan"
        },
        "name" : "MTP Composition",
        "description" : "Definition of the composition for the medication treatment plan document",
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
          "reference" : "StructureDefinition/ch-emed-epr-document-medicationtreatmentplan"
        },
        "name" : "MTP Document",
        "description" : "Definition of the bundle for the medication treatment plan document",
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
          "reference" : "StructureDefinition/ch-emed-epr-medicationstatement-treatmentplan"
        },
        "name" : "MTP MedicationStatement",
        "description" : "Definition of the medication statement for the Medication Treatment Plan document",
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
          "reference" : "Observation/ObservationParacetamolAxapharmPrePadvCancel"
        },
        "name" : "Observation: CANCEL of Axapharm paracetamol treatment.",
        "description" : "The example for che cancellation of an Axapharm paracetamol treatment via a PADV CANCEL document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ObservationParacetamolAxapharmPrePadvChange"
        },
        "name" : "Observation: CHANGE of Axapharm paracetamol prescription, replaced with Dafalgan eff.",
        "description" : "The example for che change of an Axapharm paracetamol prescription via a PADV CHANGE document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ObservationParacetamolAxapharmPrePadvChangePml"
        },
        "name" : "Observation: CHANGE of Axapharm paracetamol prescription, replaced with Dafalgan eff.",
        "description" : "The example for che change of an Axapharm paracetamol prescription via a PADV CHANGE document, conveyed in a PML document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation-list"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ObservationRamiprilPadv"
        },
        "name" : "Observation: Ramipril (PADV)",
        "description" : "The example of an observation for a change in a PADV document targetting a PRE document.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ObservationTriatecPadv"
        },
        "name" : "Observation: Triatec (PADV)",
        "description" : "The example of an observation for a change in a PADV document",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Observation"
          }
        ],
        "reference" : {
          "reference" : "Observation/ObservationTriatecPml"
        },
        "name" : "Observation: Triatec (PML)",
        "description" : "The example of an observation for a change in a PML document",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-observation-list"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/OrganizationCara"
        },
        "name" : "Organization: CARA",
        "description" : "Organization example (CARA)",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/OrganizationHug"
        },
        "name" : "Organization: HUG",
        "description" : "The example of the HUG organization",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Organization"
          }
        ],
        "reference" : {
          "reference" : "Organization/OrganizationPharmaSI"
        },
        "name" : "Organization: Pharma SI",
        "description" : "The example of pharmacy organization.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-organization"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-medicationrequest-changed"
        },
        "name" : "PADV Changed MedicationRequest",
        "description" : "Definition of the changed medication request for the pharmaceutical advice document",
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
          "reference" : "StructureDefinition/ch-emed-epr-medicationstatement-changed"
        },
        "name" : "PADV Changed MedicationStatement",
        "description" : "Definition of the changed medication statement for the pharmaceutical advice document",
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
          "reference" : "StructureDefinition/ch-emed-epr-composition-pharmaceuticaladvice"
        },
        "name" : "PADV Composition",
        "description" : "Definition of the composition for the pharmaceutical advice document",
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
          "reference" : "StructureDefinition/ch-emed-epr-document-pharmaceuticaladvice"
        },
        "name" : "PADV Document",
        "description" : "Definition of the bundle for the pharmaceutical advice document",
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
          "reference" : "StructureDefinition/ch-emed-epr-observation"
        },
        "name" : "PADV Observation",
        "description" : "Definition of the observation for the pharmaceutical advice document",
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
          "reference" : "ValueSet/ch-emed-epr-paper-format"
        },
        "name" : "Paper Formats",
        "description" : "Paper formats for generated original representations.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/PatientDupont"
        },
        "name" : "Patient: Dupont",
        "description" : "A simple example of a patient",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Patient"
          }
        ],
        "reference" : {
          "reference" : "Patient/PatientCARAPMP004"
        },
        "name" : "Patient: Michaël Christopher KARCE",
        "description" : "Patient CARAPMP004",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-patient"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/PharmacistDoe"
        },
        "name" : "Pharmacist: John Doe",
        "description" : "The example of a pharmacist",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-medication-request-changed-list"
        },
        "name" : "PML Changed Medication Request",
        "description" : "Definition of the changed medication request for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-epr-medicationstatement-changed-list"
        },
        "name" : "PML Changed MedicationStatement",
        "description" : "Definition of the changed medication statement for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-epr-composition-medicationlist"
        },
        "name" : "PML Composition",
        "description" : "Definition of the composition for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-epr-document-medicationlist"
        },
        "name" : "PML Document",
        "description" : "Definition of the bundle for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-epr-medicationdispense-list"
        },
        "name" : "PML MedicationDispense",
        "description" : "Definition of the medication dispense for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-epr-medicationrequest-list"
        },
        "name" : "PML MedicationRequest",
        "description" : "Definition of the medication request for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-epr-medicationstatement-list"
        },
        "name" : "PML MedicationStatement",
        "description" : "Definition of the medication statement for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-epr-observation-list"
        },
        "name" : "PML Observation",
        "description" : "Definition of the observation for the medication list document",
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
          "reference" : "StructureDefinition/ch-emed-epr-composition-medicationcard"
        },
        "name" : "PMLC Composition",
        "description" : "Definition of the composition for the medication card document",
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
          "reference" : "StructureDefinition/ch-emed-epr-document-medicationcard"
        },
        "name" : "PMLC Document",
        "description" : "Definition of the bundle for the medication card document",
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
          "reference" : "StructureDefinition/ch-emed-epr-medicationstatement-card"
        },
        "name" : "PMLC MedicationStatement",
        "description" : "Definition of the aggregated medication statement for the Medication Card document",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "Practitioner"
          }
        ],
        "reference" : {
          "reference" : "Practitioner/PractitionerCox"
        },
        "name" : "Practitioner: Perry Cox",
        "description" : "The example of a practitioner",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitioner"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/PractitionerRoleDoeAtPharmaSI"
        },
        "name" : "PractitionerRole: John Doe @ PharmaSI",
        "description" : "The example of a pharmacist practitioner role, linking a pharmacist (practitioner) to a pharmacy example organization.",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "PractitionerRole"
          }
        ],
        "reference" : {
          "reference" : "PractitionerRole/PractitionerRoleCoxAtHug"
        },
        "name" : "PractitionerRole: Perry Cox @ HUG",
        "description" : "The example of a practitioner role, linking a practitioner to an organization",
        "exampleCanonical" : "http://fhir.ch/ig/ch-emed-epr/StructureDefinition/ch-emed-epr-practitionerrole"
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:resource"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-composition-medicationprescription"
        },
        "name" : "PRE Composition",
        "description" : "Definition of the composition for the medication prescription document",
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
          "reference" : "StructureDefinition/ch-emed-epr-document-medicationprescription"
        },
        "name" : "PRE Document",
        "description" : "Definition of the bundle for the medication prescription document",
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
          "reference" : "StructureDefinition/ch-emed-epr-medicationrequest"
        },
        "name" : "PRE MedicationRequest",
        "description" : "Definition of the medication request for the medication prescription document",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-ratio-amount-per-amount"
        },
        "name" : "Ratio (Amount / Amount)",
        "description" : "A ratio of amount per amount",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-ratio-amount-per-time"
        },
        "name" : "Ratio (Amount / Time)",
        "description" : "A ratio of amount per time",
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
          "reference" : "ValueSet/ch-emed-epr-route-of-administration"
        },
        "name" : "Route of Administration",
        "description" : "Valueset RouteOfAdministration filtered for ambulatory care use.\n\nThis value set is a subset of the mandatory value set ([EDQM - RouteOfAdministration](http://fhir.ch/ig/ch-term/ValueSet/edqm-routeofadministration)) that contains only values compatible with ambulatory care.\nWe recommend implementers to focus on supporting this value set instead of the complete one.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "ConceptMap"
          }
        ],
        "reference" : {
          "reference" : "ConceptMap/RouteOfAdministrationEDQMToCdTyp26"
        },
        "name" : "RouteOfAdministrationEDQM -> CdTyp26",
        "description" : "Mapping from RouteOfAdministrationEDQM route of administration codes to HCI CdTyp26 codes.",
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
          "reference" : "ValueSet/ch-emed-epr-substance-admin-substitution-code"
        },
        "name" : "Substance Administration Substitution Codes",
        "description" : "Codes in use to allow or deny medication substitution.",
        "exampleBoolean" : false
      },
      {
        "extension" : [
          {
            "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
            "valueString" : "StructureDefinition:complex-type"
          }
        ],
        "reference" : {
          "reference" : "StructureDefinition/ch-emed-epr-time-quantity"
        },
        "name" : "Time Quantity",
        "description" : "A quantity with a time unit (a duration)",
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
          "reference" : "ValueSet/ch-emed-epr-time-quantity-unit-code"
        },
        "name" : "Time Quantity Unit Codes",
        "description" : "Unit Codes for time quantity units.\n\nThese are all unit codes about time quantities, excluding amount units.",
        "exampleBoolean" : false
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
              "valueUrl" : "changelog.html"
            }
          ],
          "nameUrl" : "changelog.html",
          "title" : "Changelog",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "document_dis.html"
            }
          ],
          "nameUrl" : "document_dis.html",
          "title" : "Document Dis",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "document_mtp.html"
            }
          ],
          "nameUrl" : "document_mtp.html",
          "title" : "Document Mtp",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "document_padv.html"
            }
          ],
          "nameUrl" : "document_padv.html",
          "title" : "Document Padv",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "document_pml.html"
            }
          ],
          "nameUrl" : "document_pml.html",
          "title" : "Document Pml",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "document_pmlc.html"
            }
          ],
          "nameUrl" : "document_pmlc.html",
          "title" : "Document Pmlc",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "document_pre.html"
            }
          ],
          "nameUrl" : "document_pre.html",
          "title" : "Document Pre",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "guidance_amount_quantity.html"
            }
          ],
          "nameUrl" : "guidance_amount_quantity.html",
          "title" : "Guidance Amount Quantity",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "guidance_comments.html"
            }
          ],
          "nameUrl" : "guidance_comments.html",
          "title" : "Guidance Comments",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "guidance_compositions.html"
            }
          ],
          "nameUrl" : "guidance_compositions.html",
          "title" : "Guidance Compositions",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "guidance_datatypes.html"
            }
          ],
          "nameUrl" : "guidance_datatypes.html",
          "title" : "Guidance Datatypes",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "guidance_index.html"
            }
          ],
          "nameUrl" : "guidance_index.html",
          "title" : "Guidance Index",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "guidance_others.html"
            }
          ],
          "nameUrl" : "guidance_others.html",
          "title" : "Guidance Others",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "guidance_treatment.html"
            }
          ],
          "nameUrl" : "guidance_treatment.html",
          "title" : "Guidance Treatment",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "use_case.html"
            }
          ],
          "nameUrl" : "use_case.html",
          "title" : "Use Case",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "use_case_self_medication.html"
            }
          ],
          "nameUrl" : "use_case_self_medication.html",
          "title" : "Use Case Self Medication",
          "generation" : "markdown"
        },
        {
          "extension" : [
            {
              "url" : "http://hl7.org/fhir/tools/StructureDefinition/ig-page-name",
              "valueUrl" : "workflow.html"
            }
          ],
          "nameUrl" : "workflow.html",
          "title" : "Workflow",
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
