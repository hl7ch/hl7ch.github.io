# Max Ufferer - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Max Ufferer**

## Example RelatedPerson: Max Ufferer

**patient**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)

**name**: Max Ufferer 

**telecom**: [+41 79 979 79 79](tel:+41799797979)



## Resource Content

```json
{
  "resourceType" : "RelatedPerson",
  "id" : "ChOrfRelatedPersonMUfferer",
  "patient" : {
    "reference" : "Patient/SUfferer"
  },
  "name" : [
    {
      "family" : "Ufferer",
      "given" : ["Max"]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+41 79 979 79 79"
    }
  ]
}

```
