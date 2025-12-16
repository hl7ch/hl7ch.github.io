# Service Request Processing Procedure - CH LAB-Order (R4) v3.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Service Request Processing Procedure**

## CodeSystem: Service Request Processing Procedure (Experimental) 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-lab-order/CodeSystem/Specimen.processing.procedure | *Version*:3.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChLabOrderSpecimenProcessingProcedure |
| **Copyright/Legal**: CC0-1.0 | |

 
ch-lab-order defines 2 different Kinds of Processing Procedures, replaced by http://hl7.org/fhir/ValueSet/handling-condition 

 This Code system is referenced in the content logical definition of the following value sets: 

* This CodeSystem is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Specimen.processing.procedure",
  "url" : "http://fhir.ch/ig/ch-lab-order/CodeSystem/Specimen.processing.procedure",
  "version" : "3.0.0",
  "name" : "ChLabOrderSpecimenProcessingProcedure",
  "title" : "Service Request Processing Procedure",
  "status" : "active",
  "experimental" : true,
  "date" : "2025-12-16T11:34:27+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch"
        }
      ]
    },
    {
      "name" : "Marcel Hanselmann",
      "telecom" : [
        {
          "system" : "email",
          "value" : "laborprojektgruppe@gmail.com",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "ch-lab-order defines 2 different Kinds of Processing Procedures, replaced by http://hl7.org/fhir/ValueSet/handling-condition",
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
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 2,
  "concept" : [
    {
      "code" : "FREEZE",
      "display" : "Tiefkühlen bei -18° Celsius",
      "definition" : "Freeze at -18° Celsius"
    },
    {
      "code" : "COOLING",
      "display" : "Kühlen bei 5° - 8° Celsius",
      "definition" : "Cooling at 5° - 8° Celsius"
    }
  ]
}

```
