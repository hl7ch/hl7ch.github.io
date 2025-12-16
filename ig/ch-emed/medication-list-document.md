# Medication List document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* **Medication List document**

## Medication List document

The **Medication List document** aims to fully comprise the past and current medication of a patient. It consists of the current and previous Medication Treatment Plan, Medication Prescription, Medication Dispense and Pharmaceutical Advice entries.

* [IPAG report](https://www.e-health-suisse.ch/fileadmin/user_upload/Dokumente/2017/D/170607_Bericht_eMedikation_IPAG.pdf): eCurrentMedication
* [IHE Pharmacy Technical Framework Supplement: Community Medication List (PML)](https://www.ihe.net/uploadedFiles/Documents/Pharmacy/IHE_Pharmacy_Suppl_PML.pdf)

### FHIR document (Bundle)

This exchange format is defined as a document type that corresponds to a Bundle as a FHIR resource. A Bundle has a list of entries. The first entry is the Composition, in which all contained entries are then referenced.

![](medication-list-document.png)

*Fig.: Medication List document*

#### Example instances

* 2-1 Medication List document: [XML](Bundle-2-1-MedicationList.xml.md), [JSON](Bundle-2-1-MedicationList.json.md)

### Profiles

* [CH EMED Medication List Document](StructureDefinition-ch-emed-document-medicationlist.md)
* [CH EMED Medication List Composition](StructureDefinition-ch-emed-composition-medicationlist.md)
* [CH EMED MedicationStatement (LIST)](StructureDefinition-ch-emed-medicationstatement-list.md)
* [CH EMED MedicationStatement Changed (LIST)](StructureDefinition-ch-emed-medicationstatement-changed-list.md)
* [CH EMED MedicationRequest (LIST)](StructureDefinition-ch-emed-medicationrequest-list.md)
* [CH EMED MedicationRequest Changed (LIST)](StructureDefinition-ch-emed-medicationrequest-changed-list.md)
* [CH EMED MedicationDispense (LIST)](StructureDefinition-ch-emed-medicationdispense-list.md)
* [CH EMED MedicationAdministration (LIST)](StructureDefinition-ch-emed-medicationadministration-list.md)
* [CH EMED Observation (LIST)](StructureDefinition-ch-emed-observation-list.md)

