# 5.4 Organization (Recommendation Request/Response) - Implementation Guide CH VACD v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **5.4 Organization (Recommendation Request/Response)**

## Example Organization: 5.4 Organization (Recommendation Request/Response)

Profile: [CH Core Organization](http://fhir.ch/ig/ch-core/6.0.0/StructureDefinition-ch-core-organization.html)

**identifier**: [GLN](https://www.gs1.org/standards/id-keys/gln)/7601023000119

**name**: CDSS Requesting Org



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "5-4-Organization",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:oid:2.51.1.3",
      "value" : "7601023000119"
    }
  ],
  "name" : "CDSS Requesting Org"
}

```
