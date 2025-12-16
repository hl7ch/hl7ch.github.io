# Medication Prescription document - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* **Medication Prescription document**

## Medication Prescription document

The **Medication Prescription document** describes the content and format of a Prescription document generated during the process in which a health care professional decides that the patient needs medication (ONE or MORE).

* [IPAG report](https://www.e-health-suisse.ch/fileadmin/user_upload/Dokumente/2017/D/170607_Bericht_eMedikation_IPAG.pdf): eRezept
* [IHE Pharmacy Technical Framework Supplement: Community Prescription (PRE)](https://www.ihe.net/uploadedFiles/Documents/Pharmacy/IHE_Pharmacy_Suppl_PRE.pdf)

### FHIR document (Bundle)

This exchange format is defined as a document type that corresponds to a Bundle as a FHIR resource. A Bundle has a list of entries. The first entry is the Composition, in which all contained entries are then referenced.

The representation of the Medication Prescription document SHALL be embedded as a PDF in PDF/A-1 or PDF/A-2 format.

![](medication-prescription-document.png)

*Fig.: Medication Prescription document*

#### Example instances

* 2-6 Medication Prescription document: [XML](Bundle-2-6-MedicationPrescription.xml.md), [JSON](Bundle-2-6-MedicationPrescription.json.md)

### Profiles

* [CH EMED Medication Prescription Document](StructureDefinition-ch-emed-document-medicationprescription.md)
* [CH EMED Medication Prescription Composition](StructureDefinition-ch-emed-composition-medicationprescription.md)
* [CH EMED MedicationRequest (PRE)](StructureDefinition-ch-emed-medicationrequest.md)
* [CH EMED Medication](StructureDefinition-ch-emed-medication.md)
* [CH EMED Dosage (MedicationRequest)](StructureDefinition-ch-emed-dosage-medicationrequest.md)
* [CH EMED Dosage Split](StructureDefinition-ch-emed-dosage-split.md)

