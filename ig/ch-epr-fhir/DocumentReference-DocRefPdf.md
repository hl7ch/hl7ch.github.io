# Comprehensive DocumentReference for a PDF Document - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Comprehensive DocumentReference for a PDF Document**

## Example DocumentReference: Comprehensive DocumentReference for a PDF Document



## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "DocRefPdf",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-mhd-documentreference-comprehensive"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Patient",
      "id" : "1",
      "identifier" : [
        {
          "use" : "usual",
          "type" : {
            "coding" : [
              {
                "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
                "code" : "MR"
              }
            ]
          },
          "system" : "urn:oid:2.999.1.2.3.4",
          "value" : "8734"
        }
      ],
      "name" : [
        {
          "family" : "Doe",
          "given" : ["John"]
        }
      ]
    }
  ],
  "extension" : [
    {
      "url" : "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-ext-author-authorrole",
      "valueCoding" : {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.6",
        "code" : "HCP",
        "display" : "Healthcare professional"
      }
    }
  ],
  "masterIdentifier" : {
    "use" : "usual",
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:oid:1.3.6.1.4.1.12559.11.13.2.1.2951"
  },
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:7261fa25-b36d-4660-a58a-d9df4370e985"
    }
  ],
  "status" : "current",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "code" : "419891008",
        "display" : "Record artifact"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "405624007",
          "display" : "Administrative documentation"
        }
      ]
    }
  ],
  "subject" : {
    "identifier" : {
      "system" : "urn:oid:2.16.756.5.30.1.127.3.10.3",
      "value" : "761337610411353650"
    }
  },
  "date" : "2025-09-24T12:01:30+00:00",
  "description" : "Test PDF",
  "securityLabel" : [
    {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "17621005",
          "display" : "Normal (qualifier value)"
        }
      ]
    }
  ],
  "content" : [
    {
      "attachment" : {
        "contentType" : "application/pdf",
        "language" : "de-CH",
        "url" : "urn:uuid:d8d1fe44-07e9-4a84-985f-fde97d77d54b",
        "title" : "Test PDF",
        "creation" : "2025-09-24T12:01:30+00:00"
      },
      "format" : {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.10",
        "code" : "urn:che:epr:EPR_Unstructured_Document",
        "display" : "Unstructured EPR document"
      }
    }
  ],
  "context" : {
    "facilityType" : {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "264358009",
          "display" : "General practice premises (environment)"
        }
      ]
    },
    "practiceSetting" : {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "code" : "394802001",
          "display" : "General medicine (qualifier value)"
        }
      ]
    },
    "sourcePatientInfo" : {
      "reference" : "#1"
    }
  }
}

```
