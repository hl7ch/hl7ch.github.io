# Relationship Between Documents - CH EMED (R4) v6.0.0

* [**Table of Contents**](toc.md)
* **Relationship Between Documents**

## Relationship Between Documents

In order to represent the relationship between the individual eMedication documents and their resources (MedicationStatement, MedicationDispense, MedicationAdministration, MedicationRequest, Observation), [extensions](#extensions) referencing the document and its resources are defined. These referencing mechanism is based on the usage of the [identifiers](#identifiers) from the document its resources.

The following figure illustrates the documents from the use case ([DE](usecase-german.md), [FR](usecase-french.md)) and schematically shows this referencing, which depicts the relationship between the documents.

**Note on the colors:** 
 **The background color of the resources reflects the medication (Triatec: orange, Beloc Zok: purple, Norvasc: blue).** 
 **The colors of the identifiers and the resource box should reflect the relationships/origins. Note that from use case step 2-3 onwards, the colors are repeated without a reference to the previous steps.**

![](overview-relationships-2.png)

*Fig.: Schematic overview of the relationship between the documents from the use case.*

### Identifiers

#### Identifier Format

CH EMED REQUIRES the use of [UUIDs](https://hl7.org/fhir/R4/datatypes.html#uuid) as identifiers for both document and resource identifiers (see also data type profile [CH EMED UUID Identifier](StructureDefinition-ch-emed-uuid-identifier.md)). 
 For representing UUIDs the `system` SHALL be `urn:ietf:rfc:3986` as described [here](https://hl7.org/fhir/R4/datatypes.html#:~:text=If%20the%20identifier,of%20some%20kind). The `value` SHALL start with `urn:uuid:`.

#### Document Identifier

Document identifier in [1-1 Medication Treatment Plan document](Bundle-1-1-MedicationTreatmentPlan.md): 
 `Bundle.identifier`

```
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f"
  }

```

#### Resource Identifier

Resource identifier in [1-1 Medication Treatment Plan document](Bundle-1-1-MedicationTreatmentPlan.json.md): 
 `MedicationStatement.identifier` (in this example the resource identifier has the same value as the document identifier, but it does not have to be that way)

```
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f"
  }

```

#### Referencing Extensions

Extension pairs are used in all the [extensions](#extensions) (shown below) which are used to reference the documents and its resources.

Extension in [1-2 Medication Dispense document](Bundle-1-2-MedicationDispense.json.md) to reference the 1-1 Medication Treatment Plan document (`externalDocumentId`) and its MedicationStatement (`id`): 
 `MedicationDispense.extension:treatmentPlan`

```
  {
    "extension" : [
      {
        "url" : "id",
        "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f"
        }
      },
      {
        "url" : "externalDocumentId",
        "valueIdentifier" : {
            "system" : "urn:ietf:rfc:3986",
            "value" : "urn:uuid:7aa20b27-eac0-4fef-a7b9-b10196718b9f"
        }
      }
    ],
    "url" : "http://fhir.ch/ig/ch-emed/StructureDefinition/ch-emed-ext-treatmentplan"
  }

```

### Extensions

The following table shows which extension can be used in which document. It shows which resource refers to which document (with its resource).

* Documents: [MTP](StructureDefinition-ch-emed-document-medicationtreatmentplan.md)
  * Resources: [MedicationStatement (MTP)](StructureDefinition-ch-emed-medicationstatement.md)
  * [**CH EMED Extension Treatment Plan**](StructureDefinition-ch-emed-ext-treatmentplan.md)Extension to reference an external**MedicationStatement**and the**MTP**that contains it: **no self-reference**
  * [**CH EMED Extension Dispense**](StructureDefinition-ch-emed-ext-dispense.md)Extension to reference an external**MedicationDispense**/**MedicationAdministration**and the**DIS**that contains it: 
  * [**CH EMED Extension Prescription**](StructureDefinition-ch-emed-ext-prescription.md)Extension to reference an external**MedicationRequest**and the**PRE**that contains it: 
  * [**CH EMED Extension Pharmaceutical Advice**](StructureDefinition-ch-emed-ext-pharmaceuticaladvice.md)Extension to reference an external**Observation**and the**PADV**that contains it: 
* Documents: [DIS](StructureDefinition-ch-emed-document-medicationdispense.md)
  * Resources: [MedicationDispense (DIS)](StructureDefinition-ch-emed-medicationdispense.md)
  * [**CH EMED Extension Treatment Plan**](StructureDefinition-ch-emed-ext-treatmentplan.md)Extension to reference an external**MedicationStatement**and the**MTP**that contains it: `MedicationDispense.``extension:treatmentPlan`-> MTP & MedicationStatement
  * [**CH EMED Extension Dispense**](StructureDefinition-ch-emed-ext-dispense.md)Extension to reference an external**MedicationDispense**/**MedicationAdministration**and the**DIS**that contains it: **no self-reference**
  * [**CH EMED Extension Prescription**](StructureDefinition-ch-emed-ext-prescription.md)Extension to reference an external**MedicationRequest**and the**PRE**that contains it: `MedicationDispense.``extension:prescription`-> PRE & MedicationRequest
  * [**CH EMED Extension Pharmaceutical Advice**](StructureDefinition-ch-emed-ext-pharmaceuticaladvice.md)Extension to reference an external**Observation**and the**PADV**that contains it: `MedicationDispense.``extension:pharmaceuticalAdvice`-> PADV & Observation
* Documents: [MedicationAdministration (DIS)](StructureDefinition-ch-emed-medicationadministration.md)
  * Resources: `MedicationAdministration.``extension:treatmentPlan`-> MTP & MedicationStatement
  * [**CH EMED Extension Treatment Plan**](StructureDefinition-ch-emed-ext-treatmentplan.md)Extension to reference an external**MedicationStatement**and the**MTP**that contains it: **no self-reference**
  * [**CH EMED Extension Dispense**](StructureDefinition-ch-emed-ext-dispense.md)Extension to reference an external**MedicationDispense**/**MedicationAdministration**and the**DIS**that contains it: `MedicationAdministration.``extension:prescription`-> PRE & MedicationRequest
  * [**CH EMED Extension Prescription**](StructureDefinition-ch-emed-ext-prescription.md)Extension to reference an external**MedicationRequest**and the**PRE**that contains it: `MedicationAdministration.``extension:pharmaceuticalAdvice`-> PADV & Observation
* Documents: [PRE](StructureDefinition-ch-emed-document-medicationprescription.md)
  * Resources: [MedicationRequest (PRE)](StructureDefinition-ch-emed-medicationrequest.md)
  * [**CH EMED Extension Treatment Plan**](StructureDefinition-ch-emed-ext-treatmentplan.md)Extension to reference an external**MedicationStatement**and the**MTP**that contains it: `MedicationRequest.``extension:treatmentPlan`-> MTP & MedicationStatement
  * [**CH EMED Extension Dispense**](StructureDefinition-ch-emed-ext-dispense.md)Extension to reference an external**MedicationDispense**/**MedicationAdministration**and the**DIS**that contains it: 
  * [**CH EMED Extension Prescription**](StructureDefinition-ch-emed-ext-prescription.md)Extension to reference an external**MedicationRequest**and the**PRE**that contains it: **no self-reference**
  * [**CH EMED Extension Pharmaceutical Advice**](StructureDefinition-ch-emed-ext-pharmaceuticaladvice.md)Extension to reference an external**Observation**and the**PADV**that contains it: 
* Documents: [PADV](StructureDefinition-ch-emed-document-pharmaceuticaladvice.md)
  * Resources: [Observation (PADV)](StructureDefinition-ch-emed-observation.md)
  * [**CH EMED Extension Treatment Plan**](StructureDefinition-ch-emed-ext-treatmentplan.md)Extension to reference an external**MedicationStatement**and the**MTP**that contains it: `Observation.``extension:treatmentPlan`-> MTP & MedicationStatement
  * [**CH EMED Extension Dispense**](StructureDefinition-ch-emed-ext-dispense.md)Extension to reference an external**MedicationDispense**/**MedicationAdministration**and the**DIS**that contains it: `Observation.``extension:dispense`-> DIS & MedicationDispense/MedicationAdministration
  * [**CH EMED Extension Prescription**](StructureDefinition-ch-emed-ext-prescription.md)Extension to reference an external**MedicationRequest**and the**PRE**that contains it: `Observation.``extension:prescription`-> PRE & MedicationRequest
  * [**CH EMED Extension Pharmaceutical Advice**](StructureDefinition-ch-emed-ext-pharmaceuticaladvice.md)Extension to reference an external**Observation**and the**PADV**that contains it: **no self-reference**
* Documents: [CARD](StructureDefinition-ch-emed-document-medicationcard.md)
  * Resources: [MedicationStatement (CARD)](StructureDefinition-ch-emed-medicationstatement-card.md)
  * [**CH EMED Extension Treatment Plan**](StructureDefinition-ch-emed-ext-treatmentplan.md)Extension to reference an external**MedicationStatement**and the**MTP**that contains it: `MedicationStatement.``extension:treatmentPlan`-> MTP & MedicationStatement
  * [**CH EMED Extension Dispense**](StructureDefinition-ch-emed-ext-dispense.md)Extension to reference an external**MedicationDispense**/**MedicationAdministration**and the**DIS**that contains it: 
  * [**CH EMED Extension Prescription**](StructureDefinition-ch-emed-ext-prescription.md)Extension to reference an external**MedicationRequest**and the**PRE**that contains it: 
  * [**CH EMED Extension Pharmaceutical Advice**](StructureDefinition-ch-emed-ext-pharmaceuticaladvice.md)Extension to reference an external**Observation**and the**PADV**that contains it: 
* Documents: [LIST](StructureDefinition-ch-emed-document-medicationlist.md)
  * Resources: [MedicationStatement (LIST)](StructureDefinition-ch-emed-medicationstatement-list.md),[MedicationStatement Changed (LIST)](StructureDefinition-ch-emed-medicationstatement-changed-list.md)
  * [**CH EMED Extension Treatment Plan**](StructureDefinition-ch-emed-ext-treatmentplan.md)Extension to reference an external**MedicationStatement**and the**MTP**that contains it: `MedicationStatement.``extension:parentDocument`-> MTP & MedicationStatement
  * [**CH EMED Extension Dispense**](StructureDefinition-ch-emed-ext-dispense.md)Extension to reference an external**MedicationDispense**/**MedicationAdministration**and the**DIS**that contains it: 
  * [**CH EMED Extension Prescription**](StructureDefinition-ch-emed-ext-prescription.md)Extension to reference an external**MedicationRequest**and the**PRE**that contains it: 
  * [**CH EMED Extension Pharmaceutical Advice**](StructureDefinition-ch-emed-ext-pharmaceuticaladvice.md)Extension to reference an external**Observation**and the**PADV**that contains it: 
* Documents: [MedicationDispense (LIST)](StructureDefinition-ch-emed-medicationdispense-list.md)
  * Resources: `MedicationDispense.``extension:treatmentPlan`-> MTP & MedicationStatement
  * [**CH EMED Extension Treatment Plan**](StructureDefinition-ch-emed-ext-treatmentplan.md)Extension to reference an external**MedicationStatement**and the**MTP**that contains it: `MedicationDispense.``extension:parentDocument`-> DIS & MedicationDispense
  * [**CH EMED Extension Dispense**](StructureDefinition-ch-emed-ext-dispense.md)Extension to reference an external**MedicationDispense**/**MedicationAdministration**and the**DIS**that contains it: `MedicationDispense.``extension:prescription`-> PRE & MedicationRequest
  * [**CH EMED Extension Prescription**](StructureDefinition-ch-emed-ext-prescription.md)Extension to reference an external**MedicationRequest**and the**PRE**that contains it: `MedicationDispense.``extension:pharmaceuticalAdvice`-> PADV & Observation
* Documents: [MedicationAdministration (LIST)](StructureDefinition-ch-emed-medicationadministration-list.md)
  * Resources: `MedicationAdministration.``extension:treatmentPlan`-> MTP & MedicationStatement
  * [**CH EMED Extension Treatment Plan**](StructureDefinition-ch-emed-ext-treatmentplan.md)Extension to reference an external**MedicationStatement**and the**MTP**that contains it: `MedicationAdministration.``extension:parentDocument`-> DIS & MedicationAdministration
  * [**CH EMED Extension Dispense**](StructureDefinition-ch-emed-ext-dispense.md)Extension to reference an external**MedicationDispense**/**MedicationAdministration**and the**DIS**that contains it: `MedicationAdministration.``extension:prescription`-> PRE & MedicationRequest
  * [**CH EMED Extension Prescription**](StructureDefinition-ch-emed-ext-prescription.md)Extension to reference an external**MedicationRequest**and the**PRE**that contains it: `MedicationAdministration.``extension:pharmaceuticalAdvice`-> PADV & Observation
* Documents: [MedicationRequest (LIST)](StructureDefinition-ch-emed-medicationrequest-list.md),[MedicationRequest Changed (LIST)](StructureDefinition-ch-emed-medicationrequest-changed-list.md)
  * Resources: `MedicationRequest.``extension:treatmentPlan`-> MTP & MedicationStatement
  * [**CH EMED Extension Treatment Plan**](StructureDefinition-ch-emed-ext-treatmentplan.md)Extension to reference an external**MedicationStatement**and the**MTP**that contains it: 
  * [**CH EMED Extension Dispense**](StructureDefinition-ch-emed-ext-dispense.md)Extension to reference an external**MedicationDispense**/**MedicationAdministration**and the**DIS**that contains it: `MedicationRequest.``extension:parentDocument`-> PRE & MedicationRequest
  * [**CH EMED Extension Prescription**](StructureDefinition-ch-emed-ext-prescription.md)Extension to reference an external**MedicationRequest**and the**PRE**that contains it: 
* Documents: [Observation (LIST)](StructureDefinition-ch-emed-observation-list.md)
  * Resources: `Observation.``extension:treatmentPlan`-> MTP & MedicationStatement
  * [**CH EMED Extension Treatment Plan**](StructureDefinition-ch-emed-ext-treatmentplan.md)Extension to reference an external**MedicationStatement**and the**MTP**that contains it: `Observation.``extension:dispense`-> DIS & MedicationDispense/MedicationAdministration
  * [**CH EMED Extension Dispense**](StructureDefinition-ch-emed-ext-dispense.md)Extension to reference an external**MedicationDispense**/**MedicationAdministration**and the**DIS**that contains it: `Observation.``extension:prescription`-> PRE & MedicationRequest
  * [**CH EMED Extension Prescription**](StructureDefinition-ch-emed-ext-prescription.md)Extension to reference an external**MedicationRequest**and the**PRE**that contains it: `Observation.``extension:parentDocument`-> PADV & Observation

