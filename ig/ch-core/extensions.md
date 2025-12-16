# Extensions - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* **Extensions**

## Extensions

* [Entry Resource Cross References](StructureDefinition-ch-core-ext-entry-resource-cross-references.md) 
Extension to make a reference beween resources as entries in i.e. document bundles. 

* [Place of Birth according to eCH-0011](StructureDefinition-ch-core-patient-ech-11-placeofbirth.md) 
The registered place of birth of the patient. 

* [Place of Origin according to eCH-0011](StructureDefinition-ch-core-patient-ech-11-placeoforigin.md) 
The place of origin of the patient. 

* [Substitution](StructureDefinition-ch-emed-ext-substitution.md) 
This extension is used to indicate whether the medication can be substituted for this patient, i.e. whether it is allowed. (For a prescription, MedicationRequest.substitution is used to record whether a substitution is allowed or not. When dispensing, a performed substitution is recorded in MedicationDispense.substitution.) 

* [Treatment Reason](StructureDefinition-ch-emed-ext-treatmentreason.md) 
Extension to represent the treatment reason 

* [If an encounter is caused by an accident](StructureDefinition-ch-ext-accident.md) 
Extension to define an encounter that is caused by an accident and at which time the accident happened 

* [Author of the content](StructureDefinition-ch-ext-author.md) 
Extension to reference the person (and her/his organization) who is responsible for the content (e.g. an author of an eMedication document or a recorder of an immunization). This extension is used to differentiate on entry level between the author of the content (represented with this extension) and the author of the medical decision or the performer of an event (represented e.g. with Resource.performer/informationSource). 

* [BFS Extension Medical Statistic: Admit Role for Encounter](StructureDefinition-ch-ext-bfs-ms-admitrole.md) 
BFS Extension Admit Role for Encounter 

* [BFS Extension Medical Statistic: Discharge Décision for Encounter](StructureDefinition-ch-ext-bfs-ms-dischargedecision.md) 
BFS Extension Discharge Décision for Encounter 

* [BFS Extension Medical Statistic: Discharge Destination for Encounter](StructureDefinition-ch-ext-bfs-ms-dischargedestination.md) 
BFS Extension Discharge Destination for Encounter 

* [Biller](StructureDefinition-ch-ext-biller.md) 
Extension to reference the biller in the case of a professional service or poduct provided. 

* [Address Line Type](StructureDefinition-ch-ext-ech-10-linetype.md) 
eCH-0010: Extension to define line types for addresses 

* [First Name](StructureDefinition-ch-ext-ech-11-firstname.md) 
eCH-0011: Extension to define first name type 

* [Marital Data - Separation Type](StructureDefinition-ch-ext-ech-11-maritaldata-separation.md) 
eCH-0011: Extension to define the separation type. For married but separated persons and for persons in a registered partnership but living separately. 

* [Name](StructureDefinition-ch-ext-ech-11-name.md) 
eCH-0011: Extension to define name type 

* [eCH-0046 Email Category](StructureDefinition-ch-ext-ech-46-emailcategory.md) 
Extension to define the e-mail category according to eCH-0046 

* [eCH-0046 Internet Category](StructureDefinition-ch-ext-ech-46-internetcategory.md) 
Extension to define the internet category according to eCH-0046 

* [eCH-0046 Phone Category](StructureDefinition-ch-ext-ech-46-phonecategory.md) 
Extension to define the phone category according to eCH-0046 

* [eCH-0007 Municipality Id – BFS Gemeindenummer](StructureDefinition-ch-ext-ech-7-municipalityid.md) 
eCH-0007: Extension to define a BFS Number for a municipality 

* [Encounter, Suspected Readmission](StructureDefinition-ch-ext-encounter-susp-readmission.md) 
Encounter Extension for suspected readmission 

* [EPR Confidentiality Code](StructureDefinition-ch-ext-epr-confidentialitycode.md) 
Extension for the confidentiality code according to the Swiss EPR regulation 

* [EPR Data Enterer](StructureDefinition-ch-ext-epr-dataenterer.md) 
Extension to define the information about the person and organization that entered data and the time of the data input.**Note:**This extension has its origin from CDA and is deprecated. It will be removed in a future version. 

* [EPR Information Recipient](StructureDefinition-ch-ext-epr-informationrecipient.md) 
Extension for a recipient of this document (corresponds to the addressee of a letter - person or organization).**DEPRECATED**: This extension has CDA origins and will be removed in a future version. 

* [EPR Time](StructureDefinition-ch-ext-epr-time.md) 
Additional timestamp for the author or other elements.**Note:**This extension has its origin from CDA and is deprecated. It will be removed in a future version. 

* [Responsible](StructureDefinition-ch-ext-responsible.md) 
Extension to reference the responsible for a professional service or product provided. 

