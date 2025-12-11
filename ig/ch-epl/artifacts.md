# Artifacts Summary - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* **Artifacts Summary**

## Artifacts Summary

This page provides a list of the FHIR artifacts defined as part of this implementation guide.

### Structures: Resource Profiles 

These define constraints on FHIR resources for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH EPL Organization](StructureDefinition-ch-epl-organization.md) | Defines basic constraints and extensions on the Organization resource for use with other CH EPL resources |
| [CH IDMP AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md) | Profile of the AdministrableProductDefinition resource for representing a medicinal product in the final form which is suitable for administering to a patient. |
| [CH IDMP ClinicalUseDefinition Indication](StructureDefinition-ch-idmp-clinicalusedefinition-indication.md) | Profile of the ClinicalUseDefinition resource for representing an indication. |
| [CH IDMP DocumentReference](StructureDefinition-ch-idmp-documentreference.md) | Profile of the DocumentReference resource for representing professional information and patient information as attachments. |
| [CH IDMP ManufacturedItemDefinition](StructureDefinition-ch-idmp-manufactureditemdefinition.md) | Profile of the ManufacturedItemDefinition resource for representing the characteristics of a medicinal manufactured item as contained in a packaged medicinal product. |
| [IDMP Bundle](StructureDefinition-ch-idmp-bundle.md) | Profile of the Bundle resource for representing the set of resources collected into a single package. |
| [IDMP Ingredient](StructureDefinition-ch-idmp-ingredient.md) | Profile of the Ingredient resource for representing the material used in the preparation of a medicinal/pharmaceutical product. |
| [IDMP MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md) | Profile of the MedicinalProductDefinition resource for representing the detailed data of medicinal products. |
| [IDMP PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md) | Profile of the PackagedProductDefinition resource for representing a medically related item or items, in a container or package. |
| [IDMP RegulatedAuthorization](StructureDefinition-ch-idmp-regulatedauthorization.md) | Profile of the RegulatedAuthorization resource for representing the market authorization of a (packaged) medicinal product. |

### Structures: Data Type Profiles 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [FOPH Dossier Number](StructureDefinition-ch-foph-dossier-number.md) | Identifier holding the Dossier number of FOPH |
| [GLN Identifier](StructureDefinition-ch-core-gln-identifier.md) | Identifier holding a number for GLN (Global Location Number) |
| [LOC Identifier](StructureDefinition-ch-smc-loc-identifier.md) | Identifier holding a number for LocID (Location Identifier of the European Medicines Agency - Organisation Management System OMS) |

### Structures: Extension Definitions 

These define constraints on FHIR data types for systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH - EPL Full Limitation Text](StructureDefinition-fullLimitationText.md) | Extension for representing the full wording of the limitations used by FOPH |
| [CH - EPL Product Price](StructureDefinition-productPrice.md) | A set of information about the price of a drug |
| [CH - EPL Regulated Authorization Limitation](StructureDefinition-regulatedAuthorization-limitation.md) | A limitation to an authorisation for reimbursement of a drug, for a certain indication. |
| [CH - EPL Reimbursement SL](StructureDefinition-reimbursementSL.md) | A set of information about the reimbursement of a drug |
| [CH - SMC Authorized Dose Form](StructureDefinition-authorizedDoseForm.md) | Extension for representing the authorized dose form |

### Terminology: Value Sets 

These define sets of codes used by systems conforming to this implementation guide.

| | |
| :--- | :--- |
| [CH - Authorisation Type](ValueSet-ch-authorisation-type.md) | Value Set for Authorisation Type in Switzerland used by FOPH |
| [CH - Medicinal Product Name Type](ValueSet-ch-medicinal-product-name-type.md) | Value Set for the Medicinal Product Name Type used in Switzerland |
| [CH - Other Characteristics Type](ValueSet-ch-other-characteristics-type.md) | Value Set for Other Characteristics |
| [CH EPL - Gamme](ValueSet-ch-epl-foph-gamme.md) | Value Set for the Gamme from ePL used by FOPH |
| [CH EPL - Index Therapeuticus](ValueSet-ch-epl-foph-index-therapeuticus.md) | Value set for index therapeuticus (IT-Code). |
| [CH EPL - Limitation Status](ValueSet-ch-epl-foph-limitationstatus.md) | Value Set for Limitierungsstatus from ePL used by FOPH |
| [CH EPL - Listing Status](ValueSet-ch-epl-foph-listing-status.md) | Value Set for Listing Status from ePL used by FOPH |
| [CH EPL - Other Characteristics Packaged Item](ValueSet-ch-epl-foph-other-characteristics-packaged-item.md) | Value Set for Other Characteristics of a Packaged Item from ePL used by FOPH |
| [CH EPL - Price Type](ValueSet-ch-epl-foph-pricetype.md) | Value Set for Pricetype from ePL used by FOPH |
| [CH EPL - Product Type](ValueSet-ch-epl-foph-product-type.md) | Value Set for the Product Type from ePL used by FOPH |
| [CH EPL - Reimbursement Status](ValueSet-ch-epl-foph-reimbursement-status.md) | Value Set for Reimbursement Status from ePL used by FOPH |
| [CH EPL - Type of Price Change](ValueSet-ch-epl-foph-type-of-price-change.md) | Value Set for TypeofPriceChange from ePL used by FOPH |
| [CH SMC - Additional Monitoring Indicator](ValueSet-ch-SMC-additional-monitoring-indicator.md) | Value Set for the Additional Monitoring Indicator from SMC |
| [CH SMC - Attached Document Type](ValueSet-ch-SMC-attached-document-type.md) | Value Set for the Legal Status of Supply from SMC |
| [CH SMC - Authorisation Category](ValueSet-ch-SMC-authorisation-category.md) | Value Set for the Authorisation Category from SMC |
| [CH SMC - Authorisation Status](ValueSet-ch-SMC-authorisation-status.md) | Value Set for the Authorisation Status from SMC |
| [CH SMC - Authorised Pharmaceutical Dose Form](ValueSet-ch-SMC-authorised-pharmaceutical-dose-form.md) | Value Set for the Authorised Pharmaceutical Dose Form from SMC used by FOPH |
| [CH SMC - Ingredient Role](ValueSet-ch-SMC-ingredient-role.md) | Value Set for the Ingredient Role from SMC |
| [CH SMC - Legal Status of Supply](ValueSet-ch-SMC-legal-status-of-supply.md) | Value Set for the Legal Status of Supply from SMC |
| [CH SMC - Marketing Status](ValueSet-ch-SMC-marketing-status.md) | Value Set for the Marketingstatus from SMC |
| [CH SMC - Pediatric Use Indicator](ValueSet-ch-SMC-pediatric-use-indicator.md) | Value Set for the Pediatric Use Indicator from SMC |
| [CH SMC - Special Precautions for Storage](ValueSet-ch-SMC-special-precautions-for-storage.md) | Value Set for the Special Precautions for Storage from SMC |
| [CH SMC - Substance](ValueSet-ch-SMC-substance.md) | Value Set for the Substances from SMC |
| [CH SMC - TherapeuticProductcode](ValueSet-ch-SMC-therapeuticproductcode.md) | Value Set for the TherapeuticProductcode from SMC |
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
| [CH - Authorisation Type](CodeSystem-ch-authorisation-type.md) | CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Authorisation Type |
| [CH - Medicinal Product Name Type](CodeSystem-ch-medicinal-product-name-type.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Typ des Arzneimittelnamens) |
| [CH - Other Characteristics Type](CodeSystem-ch-other-characteristics-type.md) | CH - Standard Terms to define the different other characteristics |
| [CH EPL - Gamme](CodeSystem-ch-epl-foph-gamme.md) | CH ePL - Code System for the Gamme from ePL used by FOPH |
| [CH EPL - Index Therapeuticus](CodeSystem-ch-epl-foph-index-therapeuticus.md) | Classification index therapeuticus (IT-Code). |
| [CH EPL - Limitation Status](CodeSystem-ch-epl-foph-limitationstatus.md) | CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Limitierungsstatus |
| [CH EPL - Listing Status](CodeSystem-ch-epl-foph-listing-status.md) | CH ePL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Listungs Status |
| [CH EPL - Other Characteristics Packaged Item](CodeSystem-ch-epl-foph-other-characteristics-packaged-item.md) | CH ePL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Other Characteristics of a Packaged Item |
| [CH EPL - Price Type](CodeSystem-ch-epl-foph-price-type.md) | CH ePL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Price Type |
| [CH EPL - Product Type](CodeSystem-ch-epl-foph-product-type.md) | Code System for the Product Type from ePL used by FOPH |
| [CH EPL - Reimbursement Status](CodeSystem-ch-epl-foph-reimbursement-status.md) | CH ePL - Standard Terms used in Switzerland (aggregations of codes of ValueSets Vergütungs Status |
| [CH EPL - Type of Price Change](CodeSystem-ch-epl-foph-type-of-price-change.md) | CH EPL - Standard Terms used in Switzerland (aggregations of codes of ValueSets TypeofPriceChange |
| [CH SMC - Additional Monitoring Indicator](CodeSystem-ch-SMC-additional-monitoring-indicator.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Additional Monitoring Indicator |
| [CH SMC - Attached Document Type](CodeSystem-ch-SMC-attached-document-type.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Typ des Anhangs) |
| [CH SMC - Authorisation Category](CodeSystem-ch-SMC-authorisation-category.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Authorisation Category) |
| [CH SMC - Authorisation Status](CodeSystem-ch-SMC-authorisation-status.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Zulassungsstatus) |
| [CH SMC - Ingredient Role](CodeSystem-ch-SMC-ingredient-role.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Funktion des Inhaltsstoffes) |
| [CH SMC - Legal Status of Supply](CodeSystem-ch-SMC-legal-status-of-supply.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Abgabekategorie) |
| [CH SMC - Marketing Status](CodeSystem-ch-SMC-marketing-status.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Vermarktungsstatus) |
| [CH SMC - Pediatric Use Indicator](CodeSystem-ch-SMC-pediatric-use-indicator.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Pediatric Use Indicator) |
| [CH SMC - Special Precautions for Storage](CodeSystem-ch-SMC-special-precautions-for-storage.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Besondere Vorsichtsmassnahmen für die Aufbewahrung) |
| [CH SMC - Substance](CodeSystem-ch-SMC-substance.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets Substanzen) |
| [CH SMC - TherapeuticProductcode](CodeSystem-ch-SMC-therapeuticproductcode.md) | CH - Standard Terms used in Switzerland (aggregations of codes of ValueSets TherapeuticProductcode) |
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

### Example: Example Instances 

These are example instances that show what data produced and consumed by systems conforming with this implementation guide might look like.

| | |
| :--- | :--- |
| [5204201](RegulatedAuthorization-MA-5204201.md) | ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk |
| [52042011](RegulatedAuthorization-MA-52042011.md) | ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk |
| [5470402](RegulatedAuthorization-MA-5470402.md) | ESTALIS Matrixpfl 50/250 24 Stk |
| [54704089](RegulatedAuthorization-MA-54704089.md) | ESTALIS Matrixpfl 50/250 24 Stk |
| [66231001](RegulatedAuthorization-MA-66231001.md) | KEYTRUDA Inf Konz 100 mg / 4 ml |
| [6623101](RegulatedAuthorization-MA-6623101.md) | KEYTRUDA Inf Konz 100 mg / 4 ml |
| [67431001](RegulatedAuthorization-MA-67431001.md) | TRIOGEN Kaps 250 mg Ds 100 Stk |
| [6743101](RegulatedAuthorization-MA-6743101.md) | TRIOGEN Kaps 250 mg Ds 100 Stk |
| [67719001](RegulatedAuthorization-MA-67719001.md) | CUPRIOR Filmtabl 150 mg 72 Stk |
| [6771901](RegulatedAuthorization-MA-6771901.md) | CUPRIOR Filmtabl 150 mg 72 Stk |
| [67831001](RegulatedAuthorization-MA-67831001.md) | ABRILADA Inj Lös 40 mg/0.8ml Fertpen 0.8 ml 1 Fertigpen |
| [67831001](RegulatedAuthorization-MA-67831002.md) | ABRILADA Inj Lös 40 mg/0.8ml Fertpen 0.8 ml 2 Fertigpen |
| [6783101](RegulatedAuthorization-MA-6783101.md) | ABRILADA Inj Lös 40 mg/0.8ml Fertpen 0.8 ml |
| [68793001](RegulatedAuthorization-MA-68793001.md) | PAXLOVID Filmtabl 4x150mg/2x100mg |
| [6879301](RegulatedAuthorization-MA-6879301.md) | PAXLOVID Filmtabl 4x150mg/2x100mg |
| [ABRILADA Inj Lös 40 mg/0.8ml Fertpen 0.8 ml (Bundle)](Bundle-3e18bbe5-4cc2-4eaa-8d27-815c0e885025.md) | ABRILADA Inj Lös 40 mg/0.8ml Fertpen 0.8 ml: Example of a Bundle |
| [Abrilada, Injektionslösung](MedicinalProductDefinition-Abrilada-40mg-Pre-Filled-Pen.md) | ABRILADA Inj Lös 40 mg/0.8ml Fertpen 0.8 ml: Example of a MedicinalProductDefinition (Medicinal Product) |
| [Abrilada, Injektionslösung Fachinformation](DocumentReference-DocRef-FI-Abrilada.md) | ABRILADA Inj Lös 40 mg/0.8ml Fertpen 0.8 ml |
| [Abrilada, Injektionslösung Fachinformation](DocumentReference-DocRef-PI-Abrilada.md) | ABRILADA Inj Lös 40 mg/0.8ml Fertpen 0.8 ml |
| [CH-52042011](PackagedProductDefinition-PMP-Entocort-Solvent-and-Tablet.md) | ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk: Example of a PackagedProductDefinition (Packaged Medicinal Product) |
| [CH-54704089](PackagedProductDefinition-PMP-Estalis-Transdermalpatch.md) | ESTALIS Matrixpfl 50/250 24 Stk: Example of a PackagedProductDefinition (Packaged Medicinal Product) |
| [CH-66231001](PackagedProductDefinition-PMP-Keytruda-100mg-4ml-Solution-for-Infusion.md) | KEYTRUDA Inf Konz 100 mg / 4 ml: Example of a PackagedProductDefinition (Packaged Medicinal Product) |
| [CH-67431001](PackagedProductDefinition-PMP-Triogen-250mg-Capsule.md) | TRIOGEN Kaps 250 mg Ds 100 Stk: Example of a PackagedProductDefinition (Packaged Medicinal Product) |
| [CH-67831001](PackagedProductDefinition-PMP-Abrilada-40mg-0.8ml-1-Pre-Filled-Pen.md) | ABRILADA Inj Lös 40 mg/0.8ml Fertpen 1 x 0.8 ml: Example of a PackagedProductDefinition (Packaged Medicinal Product) |
| [CH-67831002](PackagedProductDefinition-PMP-Abrilada-40mg-0.8ml-2-Pre-Filled-Pen.md) | ABRILADA Inj Lös 40 mg/0.8ml Fertpen 2 x 0.8 ml: Example of a PackagedProductDefinition (Packaged Medicinal Product) |
| [CH-68291001](PackagedProductDefinition-PMP-Cuprior-150mg-Filmcoatedtablet.md) | CUPRIOR Filmtabl 150 mg 72 Stk: Example of a PackagedProductDefinition (Packaged Medicinal Product) |
| [CH-68793001](PackagedProductDefinition-PMP-Paxlovid-Filmcoatedtablet.md) | PAXLOVID Filmtabl 4x150mg/2x100mg: Example of a PackagedProductDefinition (Packaged Medicinal Product) |
| [CUPRIOR Filmtabl 150 mg (Bundle)](Bundle-08f553cb-1404-4972-bf14-2023a5f59955.md) | CUPRIOR Filmtabl 150 mg: Example of a Bundle |
| [CUPRIOR Filmtabl 150 mg 72 Stk](MedicinalProductDefinition-Cuprior-150mg-Filmcoatedtablet.md) | CUPRIOR Filmtabl 150 mg 72 Stk: Example of a MedicinalProductDefinition (Medicinal Product) |
| [Cuprior, Filmtabletten Fachinformation](DocumentReference-DocRef-FI-Cuprior.md) | CUPRIOR Filmtabl 150 mg 72 Stk |
| [Cuprior, Filmtabletten Patienteninformation](DocumentReference-DocRef-PI-Cuprior.md) | CUPRIOR Filmtabl 150 mg 72 Stk |
| [ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk](MedicinalProductDefinition-Entocort-Solvent-and-Tablet.md) | ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk: Example of a MedicinalProductDefinition (Medicinal Product) |
| [ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk (Bundle)](Bundle-6722a9ee-ae3b-4c20-bcf0-9b7cb6f062db.md) | ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk: Example of a Bundle |
| [ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk Fachinformation](DocumentReference-DocRef-FI-Entocort.md) | ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk |
| [ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk Patienteninformation](DocumentReference-DocRef-PI-Entocort.md) | ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk |
| [ESTALIS Matrixpfl 50/250 24 Stk](MedicinalProductDefinition-Estalis-Transdermalpatch.md) | ESTALIS Matrixpfl 50/250 24 Stk: Example of a MedicinalProductDefinition (Medicinal Product) |
| [ESTALIS Matrixpfl 50/250 24 Stk (Bundle)](Bundle-5bb930aa-f30d-4f10-aeef-e85f6b5f8d59.md) | ESTALIS Matrixpfl 50/250 24 Stk: Example of a Bundle |
| [ESTALIS Matrixpfl 50/250 24 Stk Fachinformation](DocumentReference-DocRef-FI-Estalis.md) | ESTALIS Matrixpfl 50/250 24 Stk |
| [ESTALIS Matrixpfl 50/250 24 Stk Patienteninformation](DocumentReference-DocRef-PI-Estalis.md) | ESTALIS Matrixpfl 50/250 24 Stk |
| [Indication 10002556](ClinicalUseDefinition-IND-10002556.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10003268](ClinicalUseDefinition-IND-10003268.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10009900](ClinicalUseDefinition-IND-10009900.md) | ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10019927](ClinicalUseDefinition-IND-10019927.md) | KEYTRUDA Inf Konz 100 mg / 4 ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10020041](ClinicalUseDefinition-IND-10020041.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10021782](ClinicalUseDefinition-IND-10021782.md) | KEYTRUDA Inf Konz 100 mg / 4 ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10027400](ClinicalUseDefinition-IND-10027400.md) | KEYTRUDA Inf Konz 100 mg / 4 ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10028881](ClinicalUseDefinition-IND-10028881.md) | KEYTRUDA Inf Konz 100 mg / 4 ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10030247](ClinicalUseDefinition-IND-10030247.md) | ESTALIS Matrixpfl 50/250 24 Stk: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10031285](ClinicalUseDefinition-IND-10031285.md) | ESTALIS Matrixpfl 50/250 24 Stk: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10037153](ClinicalUseDefinition-IND-10037153.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10037160](ClinicalUseDefinition-IND-10037160.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10043971](ClinicalUseDefinition-IND-10043971.md) | KEYTRUDA Inf Konz 100 mg / 4 ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10045365](ClinicalUseDefinition-IND-10045365.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10046851](ClinicalUseDefinition-IND-10046851.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10061091](ClinicalUseDefinition-IND-10061091.md) | CUPRIOR Filmtabl 150 mg 72 Stk: Example of an ClinicalParticulars-Indication (Indication) and TRIOGEN Kaps 250 mg Ds 100 Stk: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10075566](ClinicalUseDefinition-IND-10075566.md) | KEYTRUDA Inf Konz 100 mg / 4 ml: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10084529](ClinicalUseDefinition-IND-10084529.md) | PAXLOVID Filmtabl 4x150mg/2x100mg: Example of an ClinicalParticulars-Indication (Indication) |
| [Indication 10089182](ClinicalUseDefinition-IND-10089182.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalParticulars-Indication (Indication) |
| [KEYTRUDA Inf Konz 100 mg / 4 ml](MedicinalProductDefinition-Keytruda-100mg-Vial.md) | KEYTRUDA Inf Konz 100 mg / 4 ml: Example of a MedicinalProductDefinition (Medicinal Product) |
| [KEYTRUDA Inf Konz 100 mg / 4 ml (Bundle)](Bundle-b2eb19be-cca4-4fd8-a2a3-84d05631e6c0.md) | KEYTRUDA Inf Konz 100 mg / 4 ml: Example of a Bundle |
| [Keytruda, Konzentrat zur Herstellung einer Infusionslösung Fachinformation](DocumentReference-DocRef-FI-Keytruda.md) | KEYTRUDA Inf Konz 100 mg / 4 ml |
| [Limitation 156370009](ClinicalUseDefinition-LIM-156370009.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalUseDefinition-Limitation (Indication) |
| [Limitation 254837009](ClinicalUseDefinition-LIM-254837009.md) | KEYTRUDA Inf Konz 100 mg / 4 ml: Example of an ClinicalUseDefinition-Limitation (Indication) |
| [Limitation 34000006](ClinicalUseDefinition-LIM-34000006.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalUseDefinition-Limitation (Indication) |
| [Limitation 59393003](ClinicalUseDefinition-LIM-59393003.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalUseDefinition-Limitation (Indication) |
| [Limitation 64766004](ClinicalUseDefinition-LIM-64766004.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalUseDefinition-Limitation (Indication) |
| [Limitation 69896004](ClinicalUseDefinition-LIM-69896004.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalUseDefinition-Limitation (Indication) |
| [Limitation 79886009](ClinicalUseDefinition-LIM-79886009.md) | CUPRIOR Filmtabl 150 mg 72 Stk: Example of an ClinicalUseDefinition-Limitation (Indication) |
| [Limitation 840539006](ClinicalUseDefinition-LIM-840539006.md) | PAXLOVID Filmtabl 4x150mg/2x100mg: Example of an ClinicalUseDefinition-Limitation (Indication) |
| [Limitation 9014002](ClinicalUseDefinition-LIM-9014002.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalUseDefinition-Limitation (Indication) |
| [Limitation 9631008](ClinicalUseDefinition-LIM-9631008.md) | ABRILADA Inj Lös 40 mg/0.8ml: Example of an ClinicalUseDefinition-Limitation (Indication) |
| [MI Abrilada-40mg-Pre-Filled-Pen](ManufacturedItemDefinition-MI-Abrilada-40mg-Pre-Filled-Pen.md) | Manufactured Item definition for ABRILADA Inj Lös 40 mg/0.8ml Fertpen 0.8 ml |
| [MI Budesonidum-2.3mg-Tablet](ManufacturedItemDefinition-MI-Budesonidum-2.3mg-Tablet.md) | Manufactured Item definition for Budesonidum 2.3mg tablet |
| [MI Estradiol-hemihydrate-Norethisteroni-acetas-Transdermal-patch](ManufacturedItemDefinition-MI-Estradiolum-Norethisteroni-Transdermalpatch.md) | Manufactured Item definition for Estradiol-hemihydrate-and-Norethisteroni-acetas-Transdermal-patch |
| [MI Nirmatrelvir-150mg-Tablet](ManufacturedItemDefinition-MI-Nirmatrelvir-150mg.md) | Manufactured Item definition for Nirmatrelvir 150mg Filmcoatedtablet |
| [MI Pembrolizumab-100mg-Vial](ManufacturedItemDefinition-MI-Pembrolizumab-100mg-Vial.md) | Manufactured Item definition for KEYTRUDA Inf Konz 100 mg / 4 ml |
| [MI Ritonavirum-100mg-Tablet](ManufacturedItemDefinition-MI-Ritonavirum-100mg.md) | Manufactured Item definition for Ritonavirum 100mg Filmcoatedtablet |
| [MI Solvent](ManufacturedItemDefinition-MI-Solvent.md) | Manufactured Item definition for solvent |
| [MI Trientinum-150mg-Tablet](ManufacturedItemDefinition-MI-Trientinum-150mg-Filmcoatedtablet.md) | Manufactured Item definition for Trientinum 150 mg Film-coated tablet |
| [MI Trientinum-250mg-Capsule](ManufacturedItemDefinition-MI-Trientinum-250mg-Capsule.md) | Manufactured Item definition for Trientinum 250 mg Capsule |
| [PAXLOVID Filmtabl 4x150mg/2x100mg](MedicinalProductDefinition-Paxlovid-Filmcoatedtablet.md) | PAXLOVID Filmtabl 4x150mg/2x100mg: Example of a MedicinalProductDefinition (Medicinal Product) |
| [PAXLOVID Filmtabl 4x150mg/2x100mg (Bundle)](Bundle-a69ea53d-79d4-46f4-bd2e-7a71439f148f.md) | PAXLOVID Filmtabl 4x150mg/2x100mg: Example of a Bundle |
| [Paxlovid, Filmtabletten Patienteninformation](DocumentReference-DocRef-PI-Paxlovid.md) | PAXLOVID Filmtabl 4x150mg/2x100mg |
| [PhP Abrilada-40mg-Pre-Filled-Pen](AdministrableProductDefinition-PhP-Abrilada-40mg-Pre-Filled-Pen.md) | Administrable Product of ABRILADA Inj Lös 40 mg/0.8ml Fertpen 0.8 ml |
| [PhP Budesonidum-Suspension](AdministrableProductDefinition-PhP-Budesonidum-Suspension.md) | Administrable Product of Budesonidum Suspension |
| [PhP Estradiol-hemihydrate and Norethisteroni-acetas Transdermal-patch](AdministrableProductDefinition-PhP-Estradiolum-Norethisteroni-Transdermalpatch.md) | Administrable Product of Estradiol-hemihydrate and Norethisteroni-acetas Transdermal-patch |
| [PhP Pembrolizumab-100mg-Vial](AdministrableProductDefinition-PhP-Pembrolizumab-100mg-Vial.md) | Administrable Product of KEYTRUDA Inf Konz 100 mg / 4 ml |
| [PhP Trientinum-150mg-Tablet](AdministrableProductDefinition-PhP-Trientinum-150mg-Filmcoatedtablet.md) | Administrable Product of Trientinum 150mg Film-coated tablet |
| [PhP Trientinum-150mg-Tablet](AdministrableProductDefinition-PhP-Trientinum-250mg-Capsule.md) | Administrable Product of Trientinum 150mg Film-coated tablet |
| [PhP-Nirmatrelvir-150mg-Filmcoatedtablet](AdministrableProductDefinition-PhP-Nirmatrelvir-150mg-Filmcoatedtablet.md) | Administrable Product of Paxlovid-Filmcoatedtablet |
| [PhP-Ritonavirum-100mg-Filmcoatedtablet](AdministrableProductDefinition-PhP-Ritonavirum-100mg-Filmcoatedtablet.md) | Administrable Product of Paxlovid-Filmcoatedtablet |
| [Professional Information Paxlovid, Filmtabletten Fachinformation](DocumentReference-DocRef-FI-Paxlovid.md) | PAXLOVID Filmtabl 4x150mg/2x100mg |
| [Reimbursement SL 17418](RegulatedAuthorization-FOPH-17418.md) | ESTALIS Matrixpfl 50/250 24 Stk: Example of an Regulated Authorization - Reimbursement Authorization |
| [Reimbursement SL 17973](RegulatedAuthorization-FOPH-17973.md) | ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk: Example of an Regulated Authorization - Reimbursement Authorization |
| [Reimbursement SL 20416](RegulatedAuthorization-FOPH-20416.md) | KEYTRUDA Inf Konz 100 mg / 4 ml: Example of an Regulated Authorization - Reimbursement Authorization |
| [Reimbursement SL 21070](RegulatedAuthorization-FOPH-21070.md) | TRIOGEN Kaps 250 mg Ds 100 Stk: Example of an Regulated Authorization - Reimbursement Authorization |
| [Reimbursement SL 21203 1 Pre-Filled Pen](RegulatedAuthorization-FOPH-21203-1-Pre-Filled-Pen.md) | Abrilada-40mg-1-Pre-Filled-Pen: Example of an Regulated Authorization - Reimbursement Authorization |
| [Reimbursement SL 21203 2 Pre-Filled Pen](RegulatedAuthorization-FOPH-21203-2-Pre-Filled-Pen.md) | Abrilada-40mg-2-Pre-Filled-Pen: Example of an Regulated Authorization - Reimbursement Authorization |
| [Reimbursement SL 21208](RegulatedAuthorization-FOPH-21208.md) | CUPRIOR Filmtabl 150 mg 72 Stk: Example of an Regulated Authorization - Reimbursement Authorization |
| [Reimbursement SL 21529](RegulatedAuthorization-FOPH-21529.md) | PAXLOVID Filmtabl 4x150mg/2x100mg: Example of an Regulated Authorization - Reimbursement Authorization |
| [TRIOGEN Kaps 250 mg Ds 100 Stk](MedicinalProductDefinition-Triogen-250mg-Capsule.md) | TRIOGEN Kaps 250 mg Ds 100 Stk: Example of a MedicinalProductDefinition (Medicinal Product) |
| [TRIOGEN Kaps 250 mg Ds 100 Stk (Bundle)](Bundle-c97d5d89-4467-4c1e-9954-9d1e1d1d46e2.md) | TRIOGEN Kaps 250 mg Ds 100 Stk: Example of a Bundle |
| [Triogen, Kapseln Fachinformation](DocumentReference-DocRef-FI-Triogen.md) | TRIOGEN Kaps 250 mg Ds 100 Stk |
| [Triogen, Kapseln Patienteninformation](DocumentReference-DocRef-PI-Triogen.md) | TRIOGEN Kaps 250 mg Ds 100 Stk |

