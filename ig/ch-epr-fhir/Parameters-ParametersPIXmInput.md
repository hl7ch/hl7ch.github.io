# PIXm Parameters Query Input - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PIXm Parameters Query Input**

## Example Parameters: PIXm Parameters Query Input



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "ParametersPIXmInput",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-in-parameters"
    ]
  },
  "parameter" : [
    {
      "name" : "sourceIdentifier",
      "valueString" : "urn:oid:2.999.1.2.3|123"
    },
    {
      "name" : "targetSystem",
      "valueString" : "urn:oid:2.999.5.6.7"
    },
    {
      "name" : "targetSystem",
      "valueString" : "urn:oid:2.16.756.5.30.1.127.3.10.3"
    }
  ]
}

```
