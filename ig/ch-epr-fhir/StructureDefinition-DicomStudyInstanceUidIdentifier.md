# DICOM Study Instance UID - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DICOM Study Instance UID**

## Data Type Profile: DICOM Study Instance UID 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/DicomStudyInstanceUidIdentifier | *Version*:5.0.0 |
| Active as of 2025-12-18 | *Computable Name*:DicomStudyInstanceUidIdentifier |
| **Copyright/Legal**: CC0-1.0 | |

 
Identifier[representation](https://www.hl7.org/fhir/imagingstudy.html#notes)of DICOM Study Instance UID 

**Usages:**

* Use this DataType Profile: [CH MHD DocumentReference Comprehensive](StructureDefinition-ch-mhd-documentreference-comprehensive.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epr-fhir|current/StructureDefinition/DicomStudyInstanceUidIdentifier)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-DicomStudyInstanceUidIdentifier.csv), [Excel](StructureDefinition-DicomStudyInstanceUidIdentifier.xlsx), [Schematron](StructureDefinition-DicomStudyInstanceUidIdentifier.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "DicomStudyInstanceUidIdentifier",
  "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/DicomStudyInstanceUidIdentifier",
  "version" : "5.0.0",
  "name" : "DicomStudyInstanceUidIdentifier",
  "title" : "DICOM Study Instance UID",
  "status" : "active",
  "date" : "2025-12-18T15:54:33+00:00",
  "publisher" : "eHealth Suisse",
  "contact" : [
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch"
        }
      ]
    },
    {
      "name" : "eHealth Suisse",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.e-health-suisse.ch",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Identifier [representation](https://www.hl7.org/fhir/imagingstudy.html#notes) of DICOM Study Instance UID ",
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
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "type" : "Identifier",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Identifier",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Identifier",
        "path" : "Identifier"
      },
      {
        "id" : "Identifier.system",
        "path" : "Identifier.system",
        "min" : 1,
        "fixedUri" : "urn:dicom:uid"
      },
      {
        "id" : "Identifier.value",
        "path" : "Identifier.value",
        "min" : 1,
        "constraint" : [
          {
            "key" : "oid-start",
            "severity" : "error",
            "human" : "This value must start with `urn:oid:`",
            "expression" : "value.startsWith('urn:oid:')",
            "source" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/DicomStudyInstanceUidIdentifier"
          }
        ]
      }
    ]
  }
}

```
