# Artifacts Summary - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md) | Profile of the AdministrableProductDefinition resource for representing a medicinal product in the final form which is suitable for administering to a patient. |
| [Bundle](StructureDefinition-ch-idmp-bundle.md) | Profile of the Bundle resource for representing the set of resources collected into a single package. |
| [ClinicalUseDefinition Indication](StructureDefinition-ch-idmp-clinicalusedefinition-indication.md) | Profile of the ClinicalUseDefinition resource for representing an indication. |
| [DocumentReference](StructureDefinition-ch-idmp-documentreference.md) | Profile of the DocumentReference resource for representing professional information and patient information as attachments. |
| [Ingredient](StructureDefinition-ch-idmp-ingredient.md) | Profile of the Ingredient resource for representing the material used in the preparation of a medicinal/pharmaceutical product. |
| [ManufacturedItemDefinition](StructureDefinition-ch-idmp-manufactureditemdefinition.md) | Profile of the ManufacturedItemDefinition resource for representing the characteristics of a medicinal manufactured item as contained in a packaged medicinal product. |
| [MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md) | Profile of the MedicinalProductDefinition resource for representing the detailed data of medicinal products. |
| [Organization](StructureDefinition-ch-idmp-organization.md) | Defines basic constraints and extensions on the Organization resource for use with other CH IDMP resources |
| [PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md) | Profile of the PackagedProductDefinition resource for representing a medically related item or items, in a container or package. |
| [RegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md) | Profile of the RegulatedAuthorization resource for representing the market authorization of a (packaged) medicinal product. |

### Structures: Data Type Profiles 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [EMA LOC Identifier](StructureDefinition-ch-ema-loc-identifier.md) | Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS) |
| [GLN Identifier](StructureDefinition-ch-core-gln-identifier.md) | Identifier holding a number for GLN (Global Location Number) |
| [SMC Identifier](StructureDefinition-ch-smc-loc-identifier.md) | Identifier holding a number for Organisations registered at Swissmedic |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH SMC - Authorized Dose Form](StructureDefinition-authorizedDoseForm.md) | Extension for representing the authorized dose form |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH - Authorisation Type](ValueSet-ch-authorisation-type-vs.md) | Value Set for Authorisation Type in Switzerland used by FOPH |
| [CH - Medicinal Product Name Type](ValueSet-ch-medicinal-product-name-type.md) | Value Set for the Medicinal Product Name Type used in Switzerland |
| [CH - Other Characteristics Type](ValueSet-ch-other-characteristics-type.md) | Value Set for Other Characteristics |
| [CH Refdata - Marketing Status](ValueSet-ch-Refdata-marketing-status.md) | Value Set for the Marketingstatus from Refdata |
| [CH SMC - Additional Monitoring Indicator](ValueSet-ch-SMC-additional-monitoring-indicator.md) | Value Set for the Additional Monitoring Indicator from SMC |
| [CH SMC - Attached Document Type](ValueSet-ch-SMC-attached-document-type.md) | Value Set for the Legal Status of Supply from SMC |
| [CH SMC - Authorisation Category](ValueSet-ch-SMC-authorisation-category.md) | Value Set for the Authorisation Category from SMC |
| [CH SMC - Authorisation Status](ValueSet-ch-SMC-authorisation-status.md) | Value Set for the Authorisation Status from SMC |
| [CH SMC - Authorised Pharmaceutical Dose Form](ValueSet-ch-SMC-authorised-pharmaceutical-dose-form.md) | Value Set for the Authorised Pharmaceutical Dose Form from SMC used by FOPH |
| [CH SMC - Ingredient Role](ValueSet-ch-SMC-ingredient-role.md) | Value Set for the Ingredient Role from SMC |
| [CH SMC - Legal Status of Supply](ValueSet-ch-SMC-legal-status-of-supply.md) | Value Set for the Legal Status of Supply from SMC |
| [CH SMC - Marketing Status](ValueSet-ch-SMC-marketing-status.md) | Value Set for the Marketingstatus from SMC |
| [CH SMC - MedicinalProductCategory](ValueSet-ch-SMC-MedicinalProductCategory.md) | Value Set for the MedicinalProductCategory from SMC |
| [CH SMC - Pediatric Use Indicator](ValueSet-ch-SMC-pediatric-use-indicator.md) | Value Set for the Pediatric Use Indicator from SMC |
| [CH SMC - Special Precautions for Storage](ValueSet-ch-SMC-special-precautions-for-storage.md) | Value Set for the Special Precautions for Storage from SMC |
| [CH SMC - Substance](ValueSet-ch-SMC-substance.md) | Value Set for the Substances from SMC |
| [EDQM - Combination Packaging](ValueSet-edqm-combination-packaging.md) | Value Set for the Combination Packaging from EDQM used by SMC |
| [EDQM - Combined Pharmaceutical Dose Form](ValueSet-edqm-combined-pharmaceutical-dose-form.md) | Value Set for the Combined Pharmaceutical Dose Froms from EDQM used by SMC |
| [EDQM - Combined Term](ValueSet-edqm-combined-term.md) | Value Set for the Combined Terms from EDQM used by SMC |
| [EDQM - Packaging](ValueSet-edqm-packaging.md) | Value Set for the Packaging from EDQM used by SMC |
| [EDQM - Pharmaceutical Dose Form](ValueSet-edqm-pharmaceutical-dose-form.md) | Value Set for the Pharmaceutical Dose Form |
| [EDQM - Route Of Administration](ValueSet-edqm-route-of-administration.md) | Value Set for the Route Of Administration from EDQM |
| [EDQM - Unit of Presentation](ValueSet-edqm-unit-of-presentation.md) | Value Set for the Unit of Presentation from EDQM used by SMC |
| [EMA - Domain](ValueSet-ema-domain.md) | Value Set for the Domain from EMA used by SMC |
| [EMA - Intended Effect](ValueSet-ema-intended-effect.md) | Value Set for the Intended Effect from EMA used by SMC |
| [EMA - Shelf Life Type](ValueSet-ema-shelf-life-type.md) | Value Set for the Shelf Life Type from EMA used by SMC |

### Terminology: Code Systems 

These define new code systems used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH - Authorisation Type](CodeSystem-ch-authorisation-type-cs.md) | CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Authorisation Type |
| [CH - Medicinal Product Name Type](CodeSystem-ch-medicinal-product-name-type.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Typ des Arzneimittelnamens) |
| [CH - Other Characteristics Type](CodeSystem-ch-other-characteristics-type.md) | CH - Standard Terms to define the different other characteristics |
| [CH Refdata - Marketing Status](CodeSystem-ch-Refdata-marketing-status.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Vermarktungsstatus) |
| [CH SMC - Additional Monitoring Indicator](CodeSystem-ch-SMC-additional-monitoring-indicator.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Additional Monitoring Indicator |
| [CH SMC - Attached Document Type](CodeSystem-ch-SMC-attached-document-type.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Typ des Anhangs) |
| [CH SMC - Authorisation Category](CodeSystem-ch-SMC-authorisation-category.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Authorisation Category) |
| [CH SMC - Authorisation Status](CodeSystem-ch-SMC-authorisation-status.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Zulassungsstatus) |
| [CH SMC - Ingredient Role](CodeSystem-ch-SMC-ingredient-role.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Funktion des Inhaltsstoffes) |
| [CH SMC - Legal Status of Supply](CodeSystem-ch-SMC-legal-status-of-supply.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Abgabekategorie) |
| [CH SMC - Marketing Status](CodeSystem-ch-SMC-marketing-status.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Vermarktungsstatus) |
| [CH SMC - MedicinalProductCategory](CodeSystem-ch-SMC-MedicinalProductCategory.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets MedicinalProductCategory) |
| [CH SMC - Pediatric Use Indicator](CodeSystem-ch-SMC-pediatric-use-indicator.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Pediatric Use Indicator) |
| [CH SMC - Special Precautions for Storage](CodeSystem-ch-SMC-special-precautions-for-storage.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Besondere Vorsichtsmassnahmen für die Aufbewahrung) |
| [CH SMC - Substance](CodeSystem-ch-SMC-substance.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Substanzen) |
| [EDQM - Standard Terms](CodeSystem-edqm-standardterms.md) | EDQM - Standard Terms used in Switzerland (see original codes system defined in https://standardterms.edqm.eu/#) |
| [EMA - Domain](CodeSystem-ema-domain.md) | CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Domain from EMA used by SMC) |
| [EMA - Intended Effect](CodeSystem-ema-intended-effect.md) | CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Intended Effect from EMA used by SMC) |
| [EMA - Shelf Life Type](CodeSystem-ema-shelf-life-type.md) | CH - Standard Terms used in Switzerland (aggregations of codes of Value Set for the Shelf Life Type from EMA used by SMC) |

### Terminology: Naming Systems 

These define identifier and/or code system identities used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [Application / Assessment Tracking Number](NamingSystem-AttNo.md) | Temporary Namingsystem in this implementation guide until officially released by Swissmedic |
| [Clinical Product Identifier](NamingSystem-PCID.md) | Temporary Identifier in this implementation guide until officially released by Swissmedic |
| [FOPH Dossier Number](NamingSystem-Dossier.md) | Identifier holding the Dossier number of FOPH |
| [GLN Identifier](NamingSystem-GLN.md) | Identifier holding a number for GLN (Global Location Number) |
| [Global Trade Item Number](NamingSystem-GTIN.md) | GS1 defines trade items as products or services that are priced, ordered or invoiced at any point in the supply chain. |
| [LOC Identifier](NamingSystem-LOC.md) | Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS) |
| [Marketing Authorisation Number](NamingSystem-AuthNo.md) | Temporary Identifier in this implementation guide until officially released by Swissmedic |
| [Medical Product Identifier](NamingSystem-MPID.md) | Temporary Identifier in this implementation guide until officially released by Swissmedic |
| [Pharmaceutical Product Identifier](NamingSystem-PhPID.md) | Temporary Identifier in this implementation guide until officially released by Swissmedic |
| [Swissmedic Location Identifier](NamingSystem-SMCLocID.md) | Temporary NamingSystem in this implementation guide until officially released by Swissmedic |

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [123456002](RegulatedAuthorization-MA-123456002.md) | Comprehensive Sample Combipack: Example of a RegulatedAuthorization (Marketing Authorization) |
| [12345601](RegulatedAuthorization-MA-12345601.md) | Comprehensive Sample Combipack: Example of a RegulatedAuthorization (Marketing Authorization) |
| [67211001](RegulatedAuthorization-MA-67211001.md) | Xospata 40 mg, Filmtabletten: Example of a RegulatedAuthorization (Marketing Authorization) |
| [6721101](RegulatedAuthorization-MA-6721101.md) | Xospata 40 mg, Filmtabletten: Example of a RegulatedAuthorization (Marketing Authorization) |
| [68291001](RegulatedAuthorization-MA-68291001.md) | Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung |
| [68291002](RegulatedAuthorization-MA-68291002.md) | Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung |
| [6829103](RegulatedAuthorization-MA-6829103.md) | Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung |
| [6829104](RegulatedAuthorization-MA-6829104.md) | Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung |
| [CH-56891003](PackagedProductDefinition-PMP-Comprehensive-Sample-Combipack.md) | Comprehensive Sample Combipack: Example of a PackagedProductDefinition (Packaged Medicinal Product) |
| [CH-56891003](PackagedProductDefinition-PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md) | Xospata 40 mg, Filmtabletten: Example of a PackagedProductDefinition (Packaged Medicinal Product) |
| [CH-68291001](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-20-Powder.md) | Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a PackagedProductDefinition (Packaged Medicinal Product) |
| [CH-68291002](PackagedProductDefinition-PMP-Enfortumabum-vedotinum-30-Powder.md) | Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a PackagedProductDefinition (Packaged Medicinal Product) |
| [Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md) | Comprehensive Sample Combipack: Example of a MedicinalProductDefinition (Medicinal Product) |
| [Comprehensive Sample Product, Creme and Pessary (Bundle)](Bundle-200f39aa-ddd8-48a2-a05e-8e4b4e6ac847.md) | Comprehensive Beispiel Produkt, Creme und Vaginalzäpfchen: Example of a Bundle |
| [Indication 10004055](ClinicalUseDefinition-IND-10004055.md) | Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten: Example of a ClinicalUseDefinition (Indication) |
| [Indication 10046950](ClinicalUseDefinition-IND-10046950.md) | Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten: Example of a ClinicalUseDefinition (Indication) |
| [Indication 10046961](ClinicalUseDefinition-IND-10046961.md) | Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten: Example of a ClinicalUseDefinition (Indication) |
| [Indication 10050348](ClinicalUseDefinition-IND-10050348.md) | Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten: Example of a ClinicalUseDefinition (Indication) |
| [Indication 10057352](ClinicalUseDefinition-IND-10057352.md) | Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung (Indication) |
| [Indication 10059034](ClinicalUseDefinition-IND-10059034.md) | Xospata 40 mg, Filmtabletten: Example of a ClinicalUseDefinition (Indication) |
| [Indication 10060558](ClinicalUseDefinition-IND-10060558.md) | Xospata 40 mg, Filmtabletten: Example of a ClinicalUseDefinition (Indication) |
| [Indication 10081513](ClinicalUseDefinition-IND-10081513.md) | Xospata 40 mg, Filmtabletten: Example of a ClinicalUseDefinition (Indication) |
| [Indication 10081514](ClinicalUseDefinition-IND-10081514.md) | Xospata 40 mg, Filmtabletten: Example of a ClinicalUseDefinition (Indication) |
| [Indication 10084619](ClinicalUseDefinition-IND-10084619.md) | Xospata 40 mg, Filmtabletten: Example of a ClinicalUseDefinition (Indication) |
| [Indication IND-10079528](ClinicalUseDefinition-IND-10079528.md) | Comprehensive Sample Combipack 20 mg Vaginal Salbe und 100 mg Vaginaltabletten: Example of a ClinicalUseDefinition (Indication) |
| [MI Clindamycin-100-Pessary](ManufacturedItemDefinition-MI-Comprehensive-Sample-VaginalPessary.md) | Manufactured Item definition for Clindamycin 100 Vaginal Pessary |
| [MI Clindamycin-20-Cream](ManufacturedItemDefinition-MI-Comprehensive-Sample-VaginalCream.md) | Manufactured Item definition for Clindamycin 20 Vaginal Cream |
| [MI Enfortumabum-vedotinum-20-Powder](ManufacturedItemDefinition-MI-Enfortumabum-vedotinum-20-Powder.md) | Manufactured Item definition for Enfortumabum Vedotinum 20 mg, Lyophilisate for solution for infusion |
| [MI Enfortumabum-vedotinum-30-Powder](ManufacturedItemDefinition-MI-Enfortumabum-vedotinum-30-Powder.md) | Manufactured Item definition for Enfortumabum Vedotinum 30 mg, Lyophilisate for solution for infusion |
| [MI Gilteritinibi-hemifumaras-40-Tablet](ManufacturedItemDefinition-MI-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md) | Manufactured Item definition for Gilteritinibi Hemifumaras 40 mg, Film-coated tablet |
| [PHP Enfortumabum-vedotinum-30-Solution](AdministrableProductDefinition-PhP-Enfortumabum-vedotinum-30-Solution.md) | Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of an AdministrableProductDefinition (Pharmaceutical Product) |
| [Padcev 20 mg, Pulver Information for healthcare professionals](DocumentReference-DocRef-FI-Padcev.md) | Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a DocumentReference |
| [Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung](MedicinalProductDefinition-Padcev-20mg-Powder.md) | Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a MedicinalProductDefinition (Medicinal Product) |
| [Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung (Bundle)](Bundle-a058182b-13dc-4797-9364-2cdb9a4c2bd4.md) | Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a Bundle |
| [Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung](MedicinalProductDefinition-Padcev-30mg-Powder.md) | Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a MedicinalProductDefinition (Medicinal Product) |
| [Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung (Bundle)](Bundle-52ae1101-1e39-4280-b6dc-b505d7501b2b.md) | Padcev 30 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of a Bundle |
| [Patient Information Comprehensive-Sample-Combipack](DocumentReference-DocRef-PI-Comprehensive.md) | Comprehensive-Sample-Combipack: Example of a DocumentReference |
| [Patient Information Xospata, Filmtabletten](DocumentReference-DocRef-PI-Xospata.md) | Xospata, Filmtabletten: Example of a DocumentReference |
| [PhP Clindamycin-100-Pessary](AdministrableProductDefinition-PhP-Comprehensive-Sample-VaginalPessary.md) | Manufactured Item definition for Clindamycin 100 Vaginal Pessary (Pharmaceutical Product) |
| [PhP Clindamycin-20-Vaginal Cream](AdministrableProductDefinition-PhP-Comprehensive-Sample-VaginalCream.md) | Manufactured Item definition for Clindamycin 30 Vaginal Cream (Pharmaceutical Product) |
| [PhP Enfortumabum-vedotinum-20-Solution](AdministrableProductDefinition-PhP-Enfortumabum-vedotinum-20-Solution.md) | Padcev 20 mg, Pulver für ein Konzentrat zur Herstellung einer Infusionslösung: Example of an AdministrableProductDefinition (Pharmaceutical Product) |
| [PhP Gilteritinibi-hemifumaras-40-Filmtabletten](AdministrableProductDefinition-PhP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md) | Xospata 40 mg, Filmtabletten: Example of an AdministrableProductDefinition (Pharmaceutical Product) |
| [Professional Information Comprehensive-Sample-Combipack](DocumentReference-DocRef-FI-Comprehensive.md) | Comprehensive-Sample-Combipack: Example of a DocumentReference |
| [Professional Information Xospata, Filmtabletten](DocumentReference-DocRef-FI-Xospata.md) | Xospata, Filmtabletten: Example of a DocumentReference |
| [Xospata 40 mg, Filmtabletten](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md) | Xospata 40 mg, Filmtabletten: Example of a MedicinalProductDefinition (Medicinal Product) |
| [Xospata 40 mg, Filmtabletten (Bundle)](Bundle-ab55cf13-a819-4875-adaa-5545e2cbdddf.md) | Xospata 40 mg, Filmtabletten: Example of a Bundle |

