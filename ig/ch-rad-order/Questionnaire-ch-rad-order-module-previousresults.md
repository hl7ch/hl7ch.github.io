# Module Questionnaire Attachment - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Module Questionnaire Attachment**

## Questionnaire: Module Questionnaire Attachment 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-rad-order/Questionnaire/ch-rad-order-module-previousresults | *Version*:2.0.1 |
| Active as of 2024-03-02 | *Computable Name*:ModuleQuestionnaireRadiologyOrderPreviousResults |
| **Copyright/Legal**: CC0-1.0 | |



## Resource Content

```json
{
  "resourceType" : "Questionnaire",
  "id" : "ch-rad-order-module-previousresults",
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/uv/sdc/StructureDefinition/sdc-questionnaire-assemble-expectation",
      "valueCode" : "assemble-child"
    }
  ],
  "url" : "http://fhir.ch/ig/ch-rad-order/Questionnaire/ch-rad-order-module-previousresults",
  "version" : "2.0.1",
  "name" : "ModuleQuestionnaireRadiologyOrderPreviousResults",
  "title" : "Module Questionnaire Radiologyorder Previous Results",
  "status" : "active",
  "date" : "2024-03-02",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "Juerg P. Bleuer",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    }
  ],
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
  "item" : [
    {
      "linkId" : "attachedFile",
      "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference#DocumentReference.content.attachment.data",
      "text" : "Datei",
      "type" : "attachment",
      "repeats" : true,
      "item" : [
        {
          "linkId" : "attachedFile.description",
          "definition" : "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-documentreference#DocumentReference.description",
          "text" : "Beschreibung",
          "type" : "string"
        }
      ]
    },
    {
      "linkId" : "dicomObject",
      "text" : "DICOM Objekt",
      "type" : "group",
      "repeats" : true,
      "item" : [
        {
          "linkId" : "dicomObject.sopInstanceUid",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy-definitions#ImagingStudy.series.instance.uid",
          "text" : "DICOM SOP Instance UID",
          "type" : "string",
          "required" : true
        },
        {
          "linkId" : "dicomObject.sopClass",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy-definitions#ImagingStudy.series.instance.sopClass.value",
          "text" : "DICOM SOP Class",
          "type" : "choice",
          "required" : true,
          "answerValueSet" : "https://dicom.nema.org/medical/dicom/current/output/chtml/part04/sect_B.5.html#table_B.5-1"
        },
        {
          "linkId" : "dicomObject.modality",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy-definitions#.ImagingStudy.series.modality.coding",
          "text" : "DICOM Series Modality",
          "type" : "choice",
          "required" : true,
          "answerValueSet" : "https://dicom.nema.org/medical/dicom/current/output/chtml/part16/sect_CID_33.html"
        },
        {
          "linkId" : "dicomObject.SeriesInstanceUid",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy-definitions#ImagingStudy.series.uid",
          "text" : "DICOM Series Instance UID",
          "type" : "string",
          "required" : true
        },
        {
          "linkId" : "dicomObject.studyInstanceUid",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy-definitions#ImagingStudy.identifier",
          "text" : "DICOM Study Instance UID",
          "type" : "string",
          "required" : true
        },
        {
          "linkId" : "dicomObject.acsn",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-imagingstudy-definitions#ImagingStudy.identifier",
          "text" : "ACSN",
          "type" : "string"
        }
      ]
    },
    {
      "linkId" : "note",
      "text" : "Bemerkungen",
      "type" : "group",
      "item" : [
        {
          "linkId" : "note.text",
          "definition" : "http://fhir.ch/ig/ch-rad-order/StructureDefinition/ch-rad-order-servicerequest-definitions#ServiceRequest.note.text",
          "text" : "Kommentar",
          "type" : "string"
        }
      ]
    }
  ]
}

```
