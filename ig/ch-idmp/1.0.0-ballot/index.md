# Home - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-idmp/ImplementationGuide/ch.fhir.ig.ch-idmp | *Version*:1.0.0-ballot |
| Active as of 2026-06-12 | *Computable Name*:CH_IDMP |
| **Copyright/Legal**: CC0-1.0 | |

This implementation guide is under informative ballot by HL7 Switzerland from August 4th, 2026 until September 30th, 2026. Please add your feedback via the 'Propose a change'-link in the footer.

[Changelog](changelog.md) with significant changes, open and closed issues.

### Introduction

CH IDMP is a project of the Refdata Foundation Switzerland to enable stuctured datacommunication of medicinal product information in IDMP/FHIR.

This is a draft implementation guide as basis for the first IDMP pilot project planned for the year 2027.

#### FHIR resources for IDMP

This implementation guide uses the following FHIR resource to represent the context of the international ISO IDMP (Identification of Medicinal Products) standard:

This implementation guide is dependent on

* [FHIR Medicinal Product Definition](https://hl7.org/fhir/medicinalproductdefinition.html)
* [FHIR Regulated Authorization](https://hl7.org/fhir/regulatedauthorization.html)
* [FHIR Packaged Product Definition](https://hl7.org/fhir/packagedproductdefinition.html)
* [FHIR Manufactured Item Definition](https://hl7.org/fhir/manufactureditemdefinition.html)
* [FHIR Administrable Product Definition](https://hl7.org/fhir/administrableproductdefinition.html)
* [FHIR Ingredient](https://hl7.org/fhir/ingredient.html)
* [FHIR Substance Definition](https://hl7.org/fhir/substancedefinition.html)
* and [FHIR Clinical Use Definition](https://hl7.org/fhir/clinicalusedefinition.html)

which describe the international context, especially related to IDMP.

### Documentation

This implementation guide describes mainly the exchange formats for the Swiss IDMP Pilot Project.

The following documents have been defined (and described in more detail on the respective subsections):

#### The related projects and standards

1. [FOPH ePL](https://fhir.ch/ig/ch-epl/index.html): Description and summary of the scope ePL project of FOPH (Federal Office of Public Health)
1. [HL7 FHIR Standard](fhir.md): Short description and explanation of the FHIR standard.
1. [ISO IDMP Standard (ISO 11615)](idmp.md): Introduction into the IDMP standard of ISO.
1. [IDMP and FHIR](fhir-idmp.md): Explanation on how IDMP is build in FHIR.

#### The IDMP implentations

1. [Swiss IDMP Implementation](ch-idmp.md): Overview of the IDMP implementation in Switzerland
1. [EMA IDMP Implementation](ema-idmp.md): Introduction of the IDMP implemantation by the European Medicines Agency for the European Union.
1. [Swissmedic IDMP Implementation](idmp.md): Introduction of the IDMP implementation by Swissmedic for Switzerland

[Changelog](changelog.md) with significant changes, open and closed issues.

**Download**: You can download this implementation guide in the [npm format](https://confluence.hl7.org/display/FHIR/NPM+Package+Specification) from [here](package.tgz).

**Download**: You can download this implementation guide as an htmp zip]from [here](full-ig.zip).

### Collaboration

This guide is the product of collaborative work undertaken with participants from:

* [Refdata Foundation Switzerland](https://www.refdata.ch)
* [Astellas Pharma AG Switzerland](https://www.astellas.com/ch/de/)
* [HCI Solutions AG](https://www.hcisolutions.ch)
* [Swiss FHIR Implementers Community](https://www.fhir.ch)
* [HL7 Switzerland](https://www.hl7.ch)
* [eHealth Suisse](https://www.e-health-suisse.ch/startseite.html)
* [Swissmedic](https://www.swissmedic.ch)
* [Federal Office of Public Health](https://www.bag.admin.ch)

### IP Statements

This document is licensed under Creative Commons "No Rights Reserved" ([CC0](https://creativecommons.org/publicdomain/zero/1.0/)).

HL7®, HEALTH LEVEL SEVEN®, FHIR® and the FHIR ![](icon-fhir-16.png)® are trademarks owned by Health Level Seven International, registered with the United States Patent and Trademark Office.

This publication includes IP covered under the following statements.

* CC0-1.0

* [CH Refdata - Marketing Status](CodeSystem-ch-Refdata-marketing-status.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 8 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [CHIDMPPackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md), [ChRefdataMarketingStatusVS](ValueSet-ch-Refdata-marketing-status.md), [PackagedProductDefinition/PMP-Comprehensive-Sample-Combipack](PackagedProductDefinition-PMP-Comprehensive-Sample-Combipack.md), [PackagedProductDefinition/PMP-Enfortumabum-vedotinum-20-Powder](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-20-Powder.md), [PackagedProductDefinition/PMP-Enfortumabum-vedotinum-30-Powder](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.md) and [PackagedProductDefinition/PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet](PackagedProductDefinition-PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md)
* [CH SMC - MedicinalProductCategory](CodeSystem-ch-SMC-MedicinalProductCategory.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 7 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [ChSMCMedicinalProductCategoryVS](ValueSet-ch-SMC-MedicinalProductCategory.md), [MedicinalProductDefinition/Comprehensive-Sample-Combipack](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md), [MedicinalProductDefinition/Padcev-20mg-Powder](MedicinalProductDefinition-Padcev-20mg-Powder.md), [MedicinalProductDefinition/Padcev-30mg-Powder](MedicinalProductDefinition-Padcev-30mg-Powder.md) and [MedicinalProductDefinition/Xospata-Filmcoatedtablet](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md)
* [CH SMC - Additional Monitoring Indicator](CodeSystem-ch-SMC-additional-monitoring-indicator.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 8 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [CHIDMPMedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md), [ChSMCAdditionalMonitoringIndicatorVS](ValueSet-ch-SMC-additional-monitoring-indicator.md), [MedicinalProductDefinition/Comprehensive-Sample-Combipack](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md), [MedicinalProductDefinition/Padcev-20mg-Powder](MedicinalProductDefinition-Padcev-20mg-Powder.md), [MedicinalProductDefinition/Padcev-30mg-Powder](MedicinalProductDefinition-Padcev-30mg-Powder.md) and [MedicinalProductDefinition/Xospata-Filmcoatedtablet](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md)
* [CH SMC - Attached Document Type](CodeSystem-ch-SMC-attached-document-type.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 9 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [CHIDMPDocumentReference](StructureDefinition-ch-idmp-documentreference.md), [ChSMCAttachedDocumentTypeVS](ValueSet-ch-SMC-attached-document-type.md), [DocumentReference/DocRef-FI-Comprehensive](DocumentReference-DocRef-FI-Comprehensive.md), [DocumentReference/DocRef-FI-Padcev](DocumentReference-DocRef-FI-Padcev.md), [DocumentReference/DocRef-FI-Xospata](DocumentReference-DocRef-FI-Xospata.md), [DocumentReference/DocRef-PI-Comprehensive](DocumentReference-DocRef-PI-Comprehensive.md) and [DocumentReference/DocRef-PI-Xospata](DocumentReference-DocRef-PI-Xospata.md)
* [CH SMC - Authorisation Category](CodeSystem-ch-SMC-authorisation-category.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 5 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [ChSMCAuthorisationCategoryVS](ValueSet-ch-SMC-authorisation-category.md), [MedicinalProductDefinition/Comprehensive-Sample-Combipack](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md), [MedicinalProductDefinition/Padcev-20mg-Powder](MedicinalProductDefinition-Padcev-20mg-Powder.md) and [MedicinalProductDefinition/Padcev-30mg-Powder](MedicinalProductDefinition-Padcev-30mg-Powder.md)
* [CH SMC - Authorisation Status](CodeSystem-ch-SMC-authorisation-status.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 12 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [CHIDMPRegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md), [ChSMCAuthorisationStatusVS](ValueSet-ch-SMC-authorisation-status.md), [RegulatedAuthorization/MA-123456002](RegulatedAuthorization-MA-123456002.md), [RegulatedAuthorization/MA-12345601](RegulatedAuthorization-MA-12345601.md), [RegulatedAuthorization/MA-67211001](RegulatedAuthorization-MA-67211001.md), [RegulatedAuthorization/MA-6721101](RegulatedAuthorization-MA-6721101.md), [RegulatedAuthorization/MA-68291001](RegulatedAuthorization-MA-68291001.md), [RegulatedAuthorization/MA-68291002](RegulatedAuthorization-MA-68291002.md), [RegulatedAuthorization/MA-6829103](RegulatedAuthorization-MA-6829103.md) and [RegulatedAuthorization/MA-6829104](RegulatedAuthorization-MA-6829104.md)
* [CH SMC - Ingredient Role](CodeSystem-ch-SMC-ingredient-role.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 4 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [CHIDMPIngredient](StructureDefinition-ch-idmp-ingredient.md) and [ChSMCIngredientRoleVS](ValueSet-ch-SMC-ingredient-role.md)
* [CH SMC - Legal Status of Supply](CodeSystem-ch-SMC-legal-status-of-supply.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 11 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [ChSMCLegalStatusOfSupplyVS](ValueSet-ch-SMC-legal-status-of-supply.md), [MedicinalProductDefinition/Comprehensive-Sample-Combipack](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md), [MedicinalProductDefinition/Padcev-20mg-Powder](MedicinalProductDefinition-Padcev-20mg-Powder.md), [MedicinalProductDefinition/Padcev-30mg-Powder](MedicinalProductDefinition-Padcev-30mg-Powder.md), [MedicinalProductDefinition/Xospata-Filmcoatedtablet](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md), [PackagedProductDefinition/PMP-Comprehensive-Sample-Combipack](PackagedProductDefinition-PMP-Comprehensive-Sample-Combipack.md), [PackagedProductDefinition/PMP-Enfortumabum-vedotinum-20-Powder](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-20-Powder.md), [PackagedProductDefinition/PMP-Enfortumabum-vedotinum-30-Powder](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.md) and [PackagedProductDefinition/PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet](PackagedProductDefinition-PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md)
* [CH SMC - Marketing Status](CodeSystem-ch-SMC-marketing-status.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 8 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [CHIDMPMedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md), [ChSMCMarketingStatusVS](ValueSet-ch-SMC-marketing-status.md), [MedicinalProductDefinition/Comprehensive-Sample-Combipack](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md), [MedicinalProductDefinition/Padcev-20mg-Powder](MedicinalProductDefinition-Padcev-20mg-Powder.md), [MedicinalProductDefinition/Padcev-30mg-Powder](MedicinalProductDefinition-Padcev-30mg-Powder.md) and [MedicinalProductDefinition/Xospata-Filmcoatedtablet](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md)
* [CH SMC - Pediatric Use Indicator](CodeSystem-ch-SMC-pediatric-use-indicator.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 8 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [CHIDMPMedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md), [ChSMCPediatricUseIndicatorVS](ValueSet-ch-SMC-pediatric-use-indicator.md), [MedicinalProductDefinition/Comprehensive-Sample-Combipack](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md), [MedicinalProductDefinition/Padcev-20mg-Powder](MedicinalProductDefinition-Padcev-20mg-Powder.md), [MedicinalProductDefinition/Padcev-30mg-Powder](MedicinalProductDefinition-Padcev-30mg-Powder.md) and [MedicinalProductDefinition/Xospata-Filmcoatedtablet](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md)
* [CH SMC - Special Precautions for Storage](CodeSystem-ch-SMC-special-precautions-for-storage.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 8 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [CHIDMPPackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md), [ChSMCSpecialPrecautionsForStorageVS](ValueSet-ch-SMC-special-precautions-for-storage.md), [PackagedProductDefinition/PMP-Comprehensive-Sample-Combipack](PackagedProductDefinition-PMP-Comprehensive-Sample-Combipack.md), [PackagedProductDefinition/PMP-Enfortumabum-vedotinum-20-Powder](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-20-Powder.md), [PackagedProductDefinition/PMP-Enfortumabum-vedotinum-30-Powder](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.md) and [PackagedProductDefinition/PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet](PackagedProductDefinition-PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md)
* [CH SMC - Substance](CodeSystem-ch-SMC-substance.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 4 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [CHIDMPIngredient](StructureDefinition-ch-idmp-ingredient.md) and [ChSMCSubstanceVS](ValueSet-ch-SMC-substance.md)
* [CH - Authorisation Type](CodeSystem-ch-authorisation-type-cs.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 12 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [CHIDMPRegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md), [ChAuthorisationTypeVS](ValueSet-ch-authorisation-type-vs.md), [RegulatedAuthorization/MA-123456002](RegulatedAuthorization-MA-123456002.md), [RegulatedAuthorization/MA-12345601](RegulatedAuthorization-MA-12345601.md), [RegulatedAuthorization/MA-67211001](RegulatedAuthorization-MA-67211001.md), [RegulatedAuthorization/MA-6721101](RegulatedAuthorization-MA-6721101.md), [RegulatedAuthorization/MA-68291001](RegulatedAuthorization-MA-68291001.md), [RegulatedAuthorization/MA-68291002](RegulatedAuthorization-MA-68291002.md), [RegulatedAuthorization/MA-6829103](RegulatedAuthorization-MA-6829103.md) and [RegulatedAuthorization/MA-6829104](RegulatedAuthorization-MA-6829104.md)
* [CH - Medicinal Product Name Type](CodeSystem-ch-medicinal-product-name-type.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [ChMedicinalProductNameTypeVS](ValueSet-ch-medicinal-product-name-type.md) and [MedicinalProductDefinition/Comprehensive-Sample-Combipack](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md)
* [CH - Other Characteristics Type](CodeSystem-ch-other-characteristics-type.md): [ChOtherCharacteristicsTypeVS](ValueSet-ch-other-characteristics-type.md)
* [EMA - Domain](CodeSystem-ema-domain.md): [CHIDMPMedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md) and [EMADomainVS](ValueSet-ema-domain.md)
* [EMA - Shelf Life Type](CodeSystem-ema-shelf-life-type.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 7 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [EMAShelfLifeTypeVS](ValueSet-ema-shelf-life-type.md), [PackagedProductDefinition/PMP-Comprehensive-Sample-Combipack](PackagedProductDefinition-PMP-Comprehensive-Sample-Combipack.md), [PackagedProductDefinition/PMP-Enfortumabum-vedotinum-20-Powder](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-20-Powder.md), [PackagedProductDefinition/PMP-Enfortumabum-vedotinum-30-Powder](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.md) and [PackagedProductDefinition/PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet](PackagedProductDefinition-PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md)
* [EMA - Intended Effect](CodeSystem-ema-intended-effect.md): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 15 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [CHIDMPClinicalUseDefinitionIndication](StructureDefinition-ch-idmp-clinicalusedefinition-indication.md), [ClinicalUseDefinition/IND-10004055](ClinicalUseDefinition-IND-10004055.md), [ClinicalUseDefinition/IND-10046950](ClinicalUseDefinition-IND-10046950.md), [ClinicalUseDefinition/IND-10046961](ClinicalUseDefinition-IND-10046961.md), [ClinicalUseDefinition/IND-10050348](ClinicalUseDefinition-IND-10050348.md), [ClinicalUseDefinition/IND-10057352](ClinicalUseDefinition-IND-10057352.md), [ClinicalUseDefinition/IND-10059034](ClinicalUseDefinition-IND-10059034.md), [ClinicalUseDefinition/IND-10060558](ClinicalUseDefinition-IND-10060558.md), [ClinicalUseDefinition/IND-10079528](ClinicalUseDefinition-IND-10079528.md), [ClinicalUseDefinition/IND-10081513](ClinicalUseDefinition-IND-10081513.md), [ClinicalUseDefinition/IND-10081514](ClinicalUseDefinition-IND-10081514.md), [ClinicalUseDefinition/IND-10084619](ClinicalUseDefinition-IND-10084619.md) and [EMAIntendedEffectVS](ValueSet-ema-intended-effect.md)
* [EDQM - Standard Terms](CodeSystem-edqm-standardterms.md): [AdministrableProductDefinition/PhP-Comprehensive-Sample-VaginalCream](AdministrableProductDefinition-PhP-Comprehensive-Sample-VaginalCream.md), [AdministrableProductDefinition/PhP-Comprehensive-Sample-VaginalPessary](AdministrableProductDefinition-PhP-Comprehensive-Sample-VaginalPessary.md)... Show 31 more, [AdministrableProductDefinition/PhP-Enfortumabum-vedotinum-20-Solution](AdministrableProductDefinition-PhP-Enfortumabum-vedotinum-20-Solution.md), [AdministrableProductDefinition/PhP-Enfortumabum-vedotinum-30-Solution](AdministrableProductDefinition-PhP-Enfortumabum-vedotinum-30-Solution.md), [AdministrableProductDefinition/PhP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet](AdministrableProductDefinition-PhP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md), [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md), [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [CHIDMPAdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md), [CHIDMPManufacturedItemDefinition](StructureDefinition-ch-idmp-manufactureditemdefinition.md), [CHIDMPMedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md), [CHIDMPPackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md), [EdqmCombinationPackagingVS](ValueSet-edqm-combination-packaging.md), [EdqmCombinedPharmaceuticalDoseFormVS](ValueSet-edqm-combined-pharmaceutical-dose-form.md), [EdqmCombinedTermVS](ValueSet-edqm-combined-term.md), [EdqmPackagingVS](ValueSet-edqm-packaging.md), [EdqmPharmaceuticalDoseFormVS](ValueSet-edqm-pharmaceutical-dose-form.md), [EdqmRouteOfAdministrationVS](ValueSet-edqm-route-of-administration.md), [EdqmUnitOfPresentationVS](ValueSet-edqm-unit-of-presentation.md), [ManufacturedItemDefinition/MI-Comprehensive-Sample-VaginalCream](ManufacturedItemDefinition-MI-Comprehensive-Sample-VaginalCream.md), [ManufacturedItemDefinition/MI-Comprehensive-Sample-VaginalPessary](ManufacturedItemDefinition-MI-Comprehensive-Sample-VaginalPessary.md), [ManufacturedItemDefinition/MI-Enfortumabum-vedotinum-20-Powder](ManufacturedItemDefinition-MI-Enfortumabum-vedotinum-20-Powder.md), [ManufacturedItemDefinition/MI-Enfortumabum-vedotinum-30-Powder](ManufacturedItemDefinition-MI-Enfortumabum-vedotinum-30-Powder.md), [ManufacturedItemDefinition/MI-Gilteritinibi-hemifumaras-40-Filmcoatedtablet](ManufacturedItemDefinition-MI-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md), [MedicinalProductDefinition/Comprehensive-Sample-Combipack](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md), [MedicinalProductDefinition/Padcev-20mg-Powder](MedicinalProductDefinition-Padcev-20mg-Powder.md), [MedicinalProductDefinition/Padcev-30mg-Powder](MedicinalProductDefinition-Padcev-30mg-Powder.md), [MedicinalProductDefinition/Xospata-Filmcoatedtablet](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md), [PackagedProductDefinition/PMP-Comprehensive-Sample-Combipack](PackagedProductDefinition-PMP-Comprehensive-Sample-Combipack.md), [PackagedProductDefinition/PMP-Enfortumabum-vedotinum-20-Powder](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-20-Powder.md), [PackagedProductDefinition/PMP-Enfortumabum-vedotinum-30-Powder](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.md) and [PackagedProductDefinition/PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet](PackagedProductDefinition-PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md)


* This material contains content that is copyright of SNOMED International. Implementers of these specifications must have the appropriate SNOMED CT Affiliate license - for more information contact [https://www.snomed.org/get-snomed](https://www.snomed.org/get-snomed) or [info@snomed.org](mailto:info@snomed.org).

* SNOMED Clinical Terms&reg; (SNOMED CT&reg;): [ChAuthorisationTypeCS](CodeSystem-ch-authorisation-type-cs.md), [ChSMCAdditionalMonitoringIndicatorCS](CodeSystem-ch-SMC-additional-monitoring-indicator.md)... Show 9 more, [ChSMCAttachedDocumentTypeCS](CodeSystem-ch-SMC-attached-document-type.md), [ChSMCAuthorisationCategoryCS](CodeSystem-ch-SMC-authorisation-category.md), [ChSMCAuthorisationStatusCS](CodeSystem-ch-SMC-authorisation-status.md), [ChSMCIngredientRoleCS](CodeSystem-ch-SMC-ingredient-role.md), [ChSMCLegalStatusOfSupplyCS](CodeSystem-ch-SMC-legal-status-of-supply.md), [ChSMCMedicinalProductCategoryCS](CodeSystem-ch-SMC-MedicinalProductCategory.md), [ChSMCPediatricUseIndicatorCS](CodeSystem-ch-SMC-pediatric-use-indicator.md), [ChSMCSpecialPrecautionsForStorageCS](CodeSystem-ch-SMC-special-precautions-for-storage.md) and [EMADomainCS](CodeSystem-ema-domain.md)


* WHO Collaborating Centre for Drug Statistics Methodology, Oslo, Norway. Use of all or parts of the material requires reference to the WHO Collaborating Centre for Drug Statistics Methodology. Copying and distribution for commercial purposes is not allowed. Changing or manipulating the material is not allowed.

* [ATC classification system](http://tx.fhir.org/r5/ValueSet/atc): [Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md), [Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md)... Show 6 more, [Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md), [Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md), [MedicinalProductDefinition/Comprehensive-Sample-Combipack](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md), [MedicinalProductDefinition/Padcev-20mg-Powder](MedicinalProductDefinition-Padcev-20mg-Powder.md), [MedicinalProductDefinition/Padcev-30mg-Powder](MedicinalProductDefinition-Padcev-30mg-Powder.md) and [MedicinalProductDefinition/Xospata-Filmcoatedtablet](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md)


### Cross Version Analysis

This IG can only be used with FHIR R5 systems.

### Dependency Table




CH-IDMP currently has no dependency on ch-core, as ch-core is based on FHIR R4, whereas CH-IDMP is based on R5. The use of R5 was necessary because IDMP support is only available from R5 onwards.

### Globals Table

*There are no Global profiles defined*



## Resource Content

```json
{
  "resourceType" : "ImplementationGuide",
  "id" : "ch.fhir.ig.ch-idmp",
  "url" : "http://fhir.ch/ig/ch-idmp/ImplementationGuide/ch.fhir.ig.ch-idmp",
  "version" : "1.0.0-ballot",
  "name" : "CH_IDMP",
  "title" : "CH IDMP (R5)",
  "status" : "active",
  "date" : "2026-06-12",
  "publisher" : "Refdata Foundation",
  "contact" : [{
    "name" : "Refdata Foundation",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.refdata.ch/de/"
    }]
  }],
  "description" : "Implementation Guide CH IDMP (R5)",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "packageId" : "ch.fhir.ig.ch-idmp",
  "license" : "CC0-1.0",
  "fhirVersion" : ["5.0.0"],
  "dependsOn" : [{
    "id" : "hl7ext",
    "extension" : [{
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/implementationguide-dependency-comment",
      "valueMarkdown" : "Automatically added as a dependency - all IGs depend on the HL7 Extension Pack"
    }],
    "uri" : "http://hl7.org/fhir/extensions/ImplementationGuide/hl7.fhir.uv.extensions",
    "packageId" : "hl7.fhir.uv.extensions.r5",
    "version" : "5.3.0"
  },
  {
    "id" : "hl7_terminology_r5",
    "uri" : "http://terminology.hl7.org/ImplementationGuide/hl7.terminology",
    "packageId" : "hl7.terminology.r5",
    "version" : "7.1.0"
  },
  {
    "id" : "hl7_fhir_uv_tools_r5",
    "uri" : "http://hl7.org/fhir/tools/ImplementationGuide/hl7.fhir.uv.tools",
    "packageId" : "hl7.fhir.uv.tools.r5",
    "version" : "1.1.2"
  }],
  "definition" : {
    "extension" : [{
      "url" : "http://hl7.org/fhir/tools/StructureDefinition/expansion-parameters",
      "valueReference" : {
        "reference" : "Parameters/expansion-parameters"
      }
    }],
    "resource" : [{
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RegulatedAuthorization"
      }],
      "reference" : {
        "reference" : "RegulatedAuthorization/MA-123456002"
      },
      "name" : "123456002",
      "description" : "Comprehensive Sample Combipack: Example of a RegulatedAuthorization (Marketing Authorization)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RegulatedAuthorization"
      }],
      "reference" : {
        "reference" : "RegulatedAuthorization/MA-12345601"
      },
      "name" : "12345601",
      "description" : "Comprehensive Sample Combipack: Example of a RegulatedAuthorization (Marketing Authorization)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RegulatedAuthorization"
      }],
      "reference" : {
        "reference" : "RegulatedAuthorization/MA-67211001"
      },
      "name" : "67211001",
      "description" : "Xospata 40 mg, Filmtabletten: Example of a RegulatedAuthorization (Marketing Authorization)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RegulatedAuthorization"
      }],
      "reference" : {
        "reference" : "RegulatedAuthorization/MA-6721101"
      },
      "name" : "6721101",
      "description" : "Xospata 40 mg, Filmtabletten: Example of a RegulatedAuthorization (Marketing Authorization)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RegulatedAuthorization"
      }],
      "reference" : {
        "reference" : "RegulatedAuthorization/MA-68291001"
      },
      "name" : "68291001",
      "description" : "Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RegulatedAuthorization"
      }],
      "reference" : {
        "reference" : "RegulatedAuthorization/MA-68291002"
      },
      "name" : "68291002",
      "description" : "Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RegulatedAuthorization"
      }],
      "reference" : {
        "reference" : "RegulatedAuthorization/MA-6829103"
      },
      "name" : "6829103",
      "description" : "Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "RegulatedAuthorization"
      }],
      "reference" : {
        "reference" : "RegulatedAuthorization/MA-6829104"
      },
      "name" : "6829104",
      "description" : "Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-regulatedauthorization"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-idmp-administrableproductdefinition"
      },
      "name" : "AdministrableProductDefinition",
      "description" : "Profile of the AdministrableProductDefinition resource for representing a medicinal product in the final form which is suitable for administering to a patient.",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      }],
      "reference" : {
        "reference" : "NamingSystem/AttNo"
      },
      "name" : "Application / Assessment Tracking Number",
      "description" : "Temporary Namingsystem in this implementation guide until officially released by Swissmedic",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-idmp-bundle"
      },
      "name" : "Bundle",
      "description" : "Profile of the Bundle resource for representing the set of resources collected into a single package.",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-authorisation-type-vs"
      },
      "name" : "CH - Authorisation Type",
      "description" : "Value Set for Authorisation Type in Switzerland used by FOPH",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-authorisation-type-cs"
      },
      "name" : "CH - Authorisation Type",
      "description" : "CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Authorisation Type",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-medicinal-product-name-type"
      },
      "name" : "CH - Medicinal Product Name Type",
      "description" : "Value Set for the Medicinal Product Name Type used in Switzerland",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-medicinal-product-name-type"
      },
      "name" : "CH - Medicinal Product Name Type",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Typ des Arzneimittelnamens)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-other-characteristics-type"
      },
      "name" : "CH - Other Characteristics Type",
      "description" : "Value Set for Other Characteristics",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-other-characteristics-type"
      },
      "name" : "CH - Other Characteristics Type",
      "description" : "CH - Standard Terms to define the different other characteristics",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-Refdata-marketing-status"
      },
      "name" : "CH Refdata - Marketing Status",
      "description" : "Value Set for the Marketingstatus from Refdata",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-Refdata-marketing-status"
      },
      "name" : "CH Refdata - Marketing Status",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Vermarktungsstatus)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-SMC-additional-monitoring-indicator"
      },
      "name" : "CH SMC - Additional Monitoring Indicator",
      "description" : "Value Set for the Additional Monitoring Indicator from SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-SMC-additional-monitoring-indicator"
      },
      "name" : "CH SMC - Additional Monitoring Indicator",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Additional Monitoring Indicator",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-SMC-attached-document-type"
      },
      "name" : "CH SMC - Attached Document Type",
      "description" : "Value Set for the Legal Status of Supply from SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-SMC-attached-document-type"
      },
      "name" : "CH SMC - Attached Document Type",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Typ des Anhangs)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-SMC-authorisation-category"
      },
      "name" : "CH SMC - Authorisation Category",
      "description" : "Value Set for the Authorisation Category from SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-SMC-authorisation-category"
      },
      "name" : "CH SMC - Authorisation Category",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Authorisation Category)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-SMC-authorisation-status"
      },
      "name" : "CH SMC - Authorisation Status",
      "description" : "Value Set for the Authorisation Status from SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-SMC-authorisation-status"
      },
      "name" : "CH SMC - Authorisation Status",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Zulassungsstatus)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-SMC-authorised-pharmaceutical-dose-form"
      },
      "name" : "CH SMC - Authorised Pharmaceutical Dose Form",
      "description" : "Value Set for the Authorised Pharmaceutical Dose Form from SMC used by FOPH",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:extension"
      }],
      "reference" : {
        "reference" : "StructureDefinition/authorizedDoseForm"
      },
      "name" : "CH SMC - Authorized Dose Form",
      "description" : "Extension for representing the authorized dose form",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-SMC-ingredient-role"
      },
      "name" : "CH SMC - Ingredient Role",
      "description" : "Value Set for the Ingredient Role from SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-SMC-ingredient-role"
      },
      "name" : "CH SMC - Ingredient Role",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Funktion des Inhaltsstoffes)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-SMC-legal-status-of-supply"
      },
      "name" : "CH SMC - Legal Status of Supply",
      "description" : "Value Set for the Legal Status of Supply from SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-SMC-legal-status-of-supply"
      },
      "name" : "CH SMC - Legal Status of Supply",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Abgabekategorie)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-SMC-marketing-status"
      },
      "name" : "CH SMC - Marketing Status",
      "description" : "Value Set for the Marketingstatus from SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-SMC-marketing-status"
      },
      "name" : "CH SMC - Marketing Status",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Vermarktungsstatus)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-SMC-MedicinalProductCategory"
      },
      "name" : "CH SMC - MedicinalProductCategory",
      "description" : "Value Set for the MedicinalProductCategory from SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-SMC-MedicinalProductCategory"
      },
      "name" : "CH SMC - MedicinalProductCategory",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets MedicinalProductCategory)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-SMC-pediatric-use-indicator"
      },
      "name" : "CH SMC - Pediatric Use Indicator",
      "description" : "Value Set for the Pediatric Use Indicator from SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-SMC-pediatric-use-indicator"
      },
      "name" : "CH SMC - Pediatric Use Indicator",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Pediatric Use Indicator)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-SMC-special-precautions-for-storage"
      },
      "name" : "CH SMC - Special Precautions for Storage",
      "description" : "Value Set for the Special Precautions for Storage from SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-SMC-special-precautions-for-storage"
      },
      "name" : "CH SMC - Special Precautions for Storage",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Besondere Vorsichtsmassnahmen für die Aufbewahrung)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ch-SMC-substance"
      },
      "name" : "CH SMC - Substance",
      "description" : "Value Set for the Substances from SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ch-SMC-substance"
      },
      "name" : "CH SMC - Substance",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Substanzen)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PackagedProductDefinition"
      }],
      "reference" : {
        "reference" : "PackagedProductDefinition/PMP-Comprehensive-Sample-Combipack"
      },
      "name" : "CH-56891003",
      "description" : "Comprehensive Sample Combipack: Example of a PackagedProductDefinition (Packaged Medicinal Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-packagedproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PackagedProductDefinition"
      }],
      "reference" : {
        "reference" : "PackagedProductDefinition/PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet"
      },
      "name" : "CH-56891003",
      "description" : "Xospata 40 mg, Filmtabletten: Example of a PackagedProductDefinition (Packaged Medicinal Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-packagedproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PackagedProductDefinition"
      }],
      "reference" : {
        "reference" : "PackagedProductDefinition/PMP-Enfortumabum-vedotinum-20-Powder"
      },
      "name" : "CH-68291001",
      "description" : "Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a PackagedProductDefinition (Packaged Medicinal Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-packagedproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "PackagedProductDefinition"
      }],
      "reference" : {
        "reference" : "PackagedProductDefinition/PMP-Enfortumabum-vedotinum-30-Powder"
      },
      "name" : "CH-68291002",
      "description" : "Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a PackagedProductDefinition (Packaged Medicinal Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-packagedproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      }],
      "reference" : {
        "reference" : "NamingSystem/PCID"
      },
      "name" : "Clinical Product Identifier",
      "description" : "Temporary Identifier in this implementation guide until officially released by Swissmedic",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-idmp-clinicalusedefinition-indication"
      },
      "name" : "ClinicalUseDefinition Indication",
      "description" : "Profile of the ClinicalUseDefinition resource for representing an indication.",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicinalProductDefinition"
      }],
      "reference" : {
        "reference" : "MedicinalProductDefinition/Comprehensive-Sample-Combipack"
      },
      "name" : "Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten",
      "description" : "Comprehensive Sample Combipack: Example of a MedicinalProductDefinition (Medicinal Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Bundle"
      }],
      "reference" : {
        "reference" : "Bundle/200f39aa-ddd8-48a2-a05e-8e4b4e6ac847"
      },
      "name" : "Comprehensive Sample Product, Creme and Pessary (Bundle)",
      "description" : "Comprehensive Beispiel Produkt, Creme und Vaginalzäpfchen: Example of a Bundle",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-bundle"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-idmp-documentreference"
      },
      "name" : "DocumentReference",
      "description" : "Profile of the DocumentReference resource for representing professional information and patient information as attachments.",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/edqm-combination-packaging"
      },
      "name" : "EDQM - Combination Packaging",
      "description" : "Value Set for the Combination Packaging from EDQM used by SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/edqm-combined-pharmaceutical-dose-form"
      },
      "name" : "EDQM - Combined Pharmaceutical Dose Form",
      "description" : "Value Set for the Combined Pharmaceutical Dose Froms from EDQM used by SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/edqm-combined-term"
      },
      "name" : "EDQM - Combined Term",
      "description" : "Value Set for the Combined Terms from EDQM used by SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/edqm-packaging"
      },
      "name" : "EDQM - Packaging",
      "description" : "Value Set for the Packaging from EDQM used by SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/edqm-pharmaceutical-dose-form"
      },
      "name" : "EDQM - Pharmaceutical Dose Form",
      "description" : "Value Set for the Pharmaceutical Dose Form",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/edqm-route-of-administration"
      },
      "name" : "EDQM - Route Of Administration",
      "description" : "Value Set for the Route Of Administration from EDQM",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/edqm-standardterms"
      },
      "name" : "EDQM - Standard Terms",
      "description" : "EDQM - Standard Terms used in Switzerland (see original codes system defined in https://standardterms.edqm.eu/#)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/edqm-unit-of-presentation"
      },
      "name" : "EDQM - Unit of Presentation",
      "description" : "Value Set for the Unit of Presentation from EDQM used by SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ema-domain"
      },
      "name" : "EMA - Domain",
      "description" : "Value Set for the Domain from EMA used by SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ema-domain"
      },
      "name" : "EMA - Domain",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Domain from EMA used by SMC)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ema-intended-effect"
      },
      "name" : "EMA - Intended Effect",
      "description" : "Value Set for the Intended Effect from EMA used by SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ema-intended-effect"
      },
      "name" : "EMA - Intended Effect",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Intended Effect from EMA used by SMC)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ValueSet"
      }],
      "reference" : {
        "reference" : "ValueSet/ema-shelf-life-type"
      },
      "name" : "EMA - Shelf Life Type",
      "description" : "Value Set for the Shelf Life Type from EMA used by SMC",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "CodeSystem"
      }],
      "reference" : {
        "reference" : "CodeSystem/ema-shelf-life-type"
      },
      "name" : "EMA - Shelf Life Type",
      "description" : "CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Shelf Life Type from EMA used by SMC)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:complex-type"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-ema-loc-identifier"
      },
      "name" : "EMA LOC Identifier",
      "description" : "Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      }],
      "reference" : {
        "reference" : "NamingSystem/Dossier"
      },
      "name" : "FOPH Dossier Number",
      "description" : "Identifier holding the Dossier number of FOPH",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:complex-type"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-core-gln-identifier"
      },
      "name" : "GLN Identifier",
      "description" : "Identifier holding a number for GLN (Global Location Number)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      }],
      "reference" : {
        "reference" : "NamingSystem/GLN"
      },
      "name" : "GLN Identifier",
      "description" : "Identifier holding a number for GLN (Global Location Number)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      }],
      "reference" : {
        "reference" : "NamingSystem/GTIN"
      },
      "name" : "Global Trade Item Number",
      "description" : "GS1 defines trade items as products or services that are priced, ordered or invoiced at any point in the supply chain.",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ClinicalUseDefinition"
      }],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10004055"
      },
      "name" : "Indication 10004055",
      "description" : "Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten: Example of a ClinicalUseDefinition (Indication)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ClinicalUseDefinition"
      }],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10046950"
      },
      "name" : "Indication 10046950",
      "description" : "Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten: Example of a ClinicalUseDefinition (Indication)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ClinicalUseDefinition"
      }],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10046961"
      },
      "name" : "Indication 10046961",
      "description" : "Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten: Example of a ClinicalUseDefinition (Indication)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ClinicalUseDefinition"
      }],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10050348"
      },
      "name" : "Indication 10050348",
      "description" : "Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten: Example of a ClinicalUseDefinition (Indication)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ClinicalUseDefinition"
      }],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10057352"
      },
      "name" : "Indication 10057352",
      "description" : "Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung (Indication)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ClinicalUseDefinition"
      }],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10059034"
      },
      "name" : "Indication 10059034",
      "description" : "Xospata 40 mg, Filmtabletten: Example of a ClinicalUseDefinition (Indication)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ClinicalUseDefinition"
      }],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10060558"
      },
      "name" : "Indication 10060558",
      "description" : "Xospata 40 mg, Filmtabletten: Example of a ClinicalUseDefinition (Indication)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ClinicalUseDefinition"
      }],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10081513"
      },
      "name" : "Indication 10081513",
      "description" : "Xospata 40 mg, Filmtabletten: Example of a ClinicalUseDefinition (Indication)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ClinicalUseDefinition"
      }],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10081514"
      },
      "name" : "Indication 10081514",
      "description" : "Xospata 40 mg, Filmtabletten: Example of a ClinicalUseDefinition (Indication)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ClinicalUseDefinition"
      }],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10084619"
      },
      "name" : "Indication 10084619",
      "description" : "Xospata 40 mg, Filmtabletten: Example of a ClinicalUseDefinition (Indication)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ClinicalUseDefinition"
      }],
      "reference" : {
        "reference" : "ClinicalUseDefinition/IND-10079528"
      },
      "name" : "Indication IND-10079528",
      "description" : "Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten: Example of a ClinicalUseDefinition (Indication)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-clinicalusedefinition-indication"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-idmp-ingredient"
      },
      "name" : "Ingredient",
      "description" : "Profile of the Ingredient resource for representing the material used in the preparation of a medicinal/pharmaceutical product.",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      }],
      "reference" : {
        "reference" : "NamingSystem/LOC"
      },
      "name" : "LOC Identifier",
      "description" : "Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS)",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-idmp-manufactureditemdefinition"
      },
      "name" : "ManufacturedItemDefinition",
      "description" : "Profile of the ManufacturedItemDefinition resource for representing the characteristics of a medicinal manufactured item as contained in a packaged medicinal product.",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      }],
      "reference" : {
        "reference" : "NamingSystem/AuthNo"
      },
      "name" : "Marketing Authorisation Number",
      "description" : "Temporary Identifier in this implementation guide until officially released by Swissmedic",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      }],
      "reference" : {
        "reference" : "NamingSystem/MPID"
      },
      "name" : "Medical Product Identifier",
      "description" : "Temporary Identifier in this implementation guide until officially released by Swissmedic",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-idmp-medicinalproductdefinition"
      },
      "name" : "MedicinalProductDefinition",
      "description" : "Profile of the MedicinalProductDefinition resource for representing the detailed data of medicinal products.",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ManufacturedItemDefinition"
      }],
      "reference" : {
        "reference" : "ManufacturedItemDefinition/MI-Comprehensive-Sample-VaginalPessary"
      },
      "name" : "MI Clindamycin-100-Pessary",
      "description" : "Manufactured Item definition for Clindamycin 100 Vaginal Pessary",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ManufacturedItemDefinition"
      }],
      "reference" : {
        "reference" : "ManufacturedItemDefinition/MI-Comprehensive-Sample-VaginalCream"
      },
      "name" : "MI Clindamycin-20-Cream",
      "description" : "Manufactured Item definition for Clindamycin 20 Vaginal Cream",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ManufacturedItemDefinition"
      }],
      "reference" : {
        "reference" : "ManufacturedItemDefinition/MI-Enfortumabum-vedotinum-20-Powder"
      },
      "name" : "MI Enfortumabum-vedotinum-20-Powder",
      "description" : "Manufactured Item definition for Enfortumabum Vedotinum 20 mg, Lyophilisate for solution for infusion",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ManufacturedItemDefinition"
      }],
      "reference" : {
        "reference" : "ManufacturedItemDefinition/MI-Enfortumabum-vedotinum-30-Powder"
      },
      "name" : "MI Enfortumabum-vedotinum-30-Powder",
      "description" : "Manufactured Item definition for Enfortumabum Vedotinum 30 mg, Lyophilisate for solution for infusion",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "ManufacturedItemDefinition"
      }],
      "reference" : {
        "reference" : "ManufacturedItemDefinition/MI-Gilteritinibi-hemifumaras-40-Filmcoatedtablet"
      },
      "name" : "MI Gilteritinibi-hemifumaras-40-Tablet",
      "description" : "Manufactured Item definition for Gilteritinibi Hemifumaras 40 mg, Film-coated tablet",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-manufactureditemdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-idmp-organization"
      },
      "name" : "Organization",
      "description" : "Defines basic constraints and extensions on the Organization resource for use with other CH IDMP resources",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-idmp-packagedproductdefinition"
      },
      "name" : "PackagedProductDefinition",
      "description" : "Profile of the PackagedProductDefinition resource for representing a medically related item or items, in a container or package.",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicinalProductDefinition"
      }],
      "reference" : {
        "reference" : "MedicinalProductDefinition/Padcev-20mg-Powder"
      },
      "name" : "Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung",
      "description" : "Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a MedicinalProductDefinition (Medicinal Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Bundle"
      }],
      "reference" : {
        "reference" : "Bundle/a058182b-13dc-4797-9364-2cdb9a4c2bd4"
      },
      "name" : "Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung (Bundle)",
      "description" : "Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a Bundle",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-bundle"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/DocRef-FI-Padcev"
      },
      "name" : "Padcev 20 mg, Pulver Information for healthcare professionals",
      "description" : "Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a DocumentReference",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-documentreference"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicinalProductDefinition"
      }],
      "reference" : {
        "reference" : "MedicinalProductDefinition/Padcev-30mg-Powder"
      },
      "name" : "Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung",
      "description" : "Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a MedicinalProductDefinition (Medicinal Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Bundle"
      }],
      "reference" : {
        "reference" : "Bundle/52ae1101-1e39-4280-b6dc-b505d7501b2b"
      },
      "name" : "Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung (Bundle)",
      "description" : "Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a Bundle",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-bundle"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/DocRef-PI-Comprehensive"
      },
      "name" : "Patient Information Comprehensive-Sample-Combipack",
      "description" : "Comprehensive-Sample-Combipack: Example of a DocumentReference",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-documentreference"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/DocRef-PI-Xospata"
      },
      "name" : "Patient Information Xospata, Filmtabletten",
      "description" : "Xospata, Filmtabletten: Example of a DocumentReference",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-documentreference"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      }],
      "reference" : {
        "reference" : "NamingSystem/PhPID"
      },
      "name" : "Pharmaceutical Product Identifier",
      "description" : "Temporary Identifier in this implementation guide until officially released by Swissmedic",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "AdministrableProductDefinition"
      }],
      "reference" : {
        "reference" : "AdministrableProductDefinition/PhP-Comprehensive-Sample-VaginalPessary"
      },
      "name" : "PhP Clindamycin-100-Pessary",
      "description" : "Manufactured Item definition for Clindamycin 100 Vaginal Pessary (Pharmaceutical Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-administrableproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "AdministrableProductDefinition"
      }],
      "reference" : {
        "reference" : "AdministrableProductDefinition/PhP-Comprehensive-Sample-VaginalCream"
      },
      "name" : "PhP Clindamycin-20-Vaginal Cream",
      "description" : "Manufactured Item definition for Clindamycin 30 Vaginal Cream (Pharmaceutical Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-administrableproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "AdministrableProductDefinition"
      }],
      "reference" : {
        "reference" : "AdministrableProductDefinition/PhP-Enfortumabum-vedotinum-20-Solution"
      },
      "name" : "PhP Enfortumabum-vedotinum-20-Solution",
      "description" : "Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of an AdministrableProductDefinition (Pharmaceutical Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-administrableproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "AdministrableProductDefinition"
      }],
      "reference" : {
        "reference" : "AdministrableProductDefinition/PhP-Enfortumabum-vedotinum-30-Solution"
      },
      "name" : "PHP Enfortumabum-vedotinum-30-Solution",
      "description" : "Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of an AdministrableProductDefinition (Pharmaceutical Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-administrableproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "AdministrableProductDefinition"
      }],
      "reference" : {
        "reference" : "AdministrableProductDefinition/PhP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet"
      },
      "name" : "PhP Gilteritinibi-hemifumaras-40-Filmtabletten",
      "description" : "Xospata 40 mg, Filmtabletten: Example of an AdministrableProductDefinition (Pharmaceutical Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-administrableproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/DocRef-FI-Comprehensive"
      },
      "name" : "Professional Information Comprehensive-Sample-Combipack",
      "description" : "Comprehensive-Sample-Combipack: Example of a DocumentReference",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-documentreference"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "DocumentReference"
      }],
      "reference" : {
        "reference" : "DocumentReference/DocRef-FI-Xospata"
      },
      "name" : "Professional Information Xospata, Filmtabletten",
      "description" : "Xospata, Filmtabletten: Example of a DocumentReference",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-documentreference"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:resource"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-idmp-regulatedauthorization"
      },
      "name" : "RegulatedAuthorization",
      "description" : "Profile of the RegulatedAuthorization resource for representing the market authorization of a (packaged) medicinal product.",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "StructureDefinition:complex-type"
      }],
      "reference" : {
        "reference" : "StructureDefinition/ch-smc-loc-identifier"
      },
      "name" : "SMC Identifier",
      "description" : "Identifier holding a number for Organisations registered at Swissmedic",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "NamingSystem"
      }],
      "reference" : {
        "reference" : "NamingSystem/SMCLocID"
      },
      "name" : "Swissmedic Location Identifier",
      "description" : "Temporary NamingSystem in this implementation guide until officially released by Swissmedic",
      "isExample" : false
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "MedicinalProductDefinition"
      }],
      "reference" : {
        "reference" : "MedicinalProductDefinition/Xospata-Filmcoatedtablet"
      },
      "name" : "Xospata 40 mg, Filmtabletten",
      "description" : "Xospata 40 mg, Filmtabletten: Example of a MedicinalProductDefinition (Medicinal Product)",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-medicinalproductdefinition"]
    },
    {
      "extension" : [{
        "url" : "http://hl7.org/fhir/tools/StructureDefinition/resource-information",
        "valueString" : "Bundle"
      }],
      "reference" : {
        "reference" : "Bundle/ab55cf13-a819-4875-adaa-5545e2cbdddf"
      },
      "name" : "Xospata 40 mg, Filmtabletten (Bundle)",
      "description" : "Xospata 40 mg, Filmtabletten: Example of a Bundle",
      "isExample" : true,
      "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-bundle"]
    }],
    "page" : {
      "sourceUrl" : "toc.html",
      "name" : "toc.html",
      "title" : "Table of Contents",
      "generation" : "html",
      "page" : [{
        "sourceUrl" : "index.html",
        "name" : "index.html",
        "title" : "Home",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "fhir.html",
        "name" : "fhir.html",
        "title" : "FHIR Standard HL7",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "project.html",
        "name" : "project.html",
        "title" : "Project Description",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "idmp.html",
        "name" : "idmp.html",
        "title" : "ISO IDMP Standard (ISO 11615)",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "fhir-idmp.html",
        "name" : "fhir-idmp.html",
        "title" : "IDMP and FHIR",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "ch-idmp.html",
        "name" : "ch-idmp.html",
        "title" : "Swiss IDMP Implementation",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "ema-idmp.html",
        "name" : "ema-idmp.html",
        "title" : "EMA IDMP Implementation and SPOR Overview",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "smc-idmp.html",
        "name" : "smc-idmp.html",
        "title" : "Swissmedic IDMP Implementation",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "comprehensive.html",
        "name" : "comprehensive.html",
        "title" : "Comprehensive",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "padcev20.html",
        "name" : "padcev20.html",
        "title" : "Padcev20",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "padcev30.html",
        "name" : "padcev30.html",
        "title" : "Padcev30",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "xospata.html",
        "name" : "xospata.html",
        "title" : "Xospata",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "profiles.html",
        "name" : "profiles.html",
        "title" : "Profiles",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "extensions.html",
        "name" : "extensions.html",
        "title" : "Extensions",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "terminology.html",
        "name" : "terminology.html",
        "title" : "Terminology",
        "generation" : "markdown"
      },
      {
        "sourceUrl" : "changelog.html",
        "name" : "changelog.html",
        "title" : "Changelog",
        "generation" : "markdown"
      }]
    },
    "parameter" : [{
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "copyrightyear"
      },
      "value" : "2026+"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "releaselabel"
      },
      "value" : "ballot"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "excludettl"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "allow-extensible-warnings"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "display-warnings"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "path-expansion-params"
      },
      "value" : "../../expansion-params.json"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "urn:oid:0.4.0.127.0.16.1.1.2.1"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "urn:oid:0.4.0.127.0.16.1.1.2.2"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "urn:oid:0.4.0.127.0.16.1.1.2.3"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "urn:oid:0.4.0.127.0.16.1.1.2.4"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "urn:oid:0.4.0.127.0.16.1.1.2.5"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "urn:oid:0.4.0.127.0.16.1.1.2.6"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "urn:oid:0.4.0.127.0.16.1.1.2.7"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "urn:oid:0.4.0.127.0.16.1.1.2.11"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "http://standardterms.edqm.eu"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "https://spor.ema.europa.eu/v1/lists"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "http://spor.ema.europa.eu/v1/lists/100000000004"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "http://spor.ema.europa.eu/v1/lists/100000073343"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "special-url"
      },
      "value" : "http://spor.ema.europa.eu/v1/lists/200000003186"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "autoload-resources"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-resource"
      },
      "value" : "input/capabilities"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-resource"
      },
      "value" : "input/examples"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-resource"
      },
      "value" : "input/extensions"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-resource"
      },
      "value" : "input/models"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-resource"
      },
      "value" : "input/operations"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-resource"
      },
      "value" : "input/profiles"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-resource"
      },
      "value" : "input/resources"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-resource"
      },
      "value" : "input/vocabulary"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-resource"
      },
      "value" : "input/maps"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-resource"
      },
      "value" : "input/testing"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-resource"
      },
      "value" : "input/history"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-resource"
      },
      "value" : "fsh-generated/resources"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-pages"
      },
      "value" : "template/config"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-pages"
      },
      "value" : "input/images"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "path-liquid"
      },
      "value" : "template/liquid"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "path-liquid"
      },
      "value" : "input/liquid"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "path-qa"
      },
      "value" : "temp/qa"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "path-temp"
      },
      "value" : "temp/pages"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "path-output"
      },
      "value" : "output"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/guide-parameter-code",
        "code" : "path-tx-cache"
      },
      "value" : "input-cache/txcache"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "path-suppressed-warnings"
      },
      "value" : "input/ignoreWarnings.txt"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "path-history"
      },
      "value" : "http://fhir.ch/ig/ch-idmp/history.html"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "template-html"
      },
      "value" : "template-page.html"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "template-md"
      },
      "value" : "template-page-md.html"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "apply-contact"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "apply-context"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "apply-copyright"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "apply-jurisdiction"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "apply-license"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "apply-publisher"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "apply-version"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "apply-wg"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "active-tables"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "fmm-definition"
      },
      "value" : "http://hl7.org/fhir/versions.html#maturity"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "propagate-status"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "excludelogbinaryformat"
      },
      "value" : "true"
    },
    {
      "code" : {
        "system" : "http://hl7.org/fhir/tools/CodeSystem/ig-parameters",
        "code" : "tabbed-snapshots"
      },
      "value" : "true"
    }]
  }
}

```
