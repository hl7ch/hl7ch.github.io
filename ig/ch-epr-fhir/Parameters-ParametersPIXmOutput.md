# PIXm Parameters Query Output - CH EPR FHIR (R4) v5.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PIXm Parameters Query Output**

## Example Parameters: PIXm Parameters Query Output



## Resource Content

```json
{
  "resourceType" : "Parameters",
  "id" : "ParametersPIXmOutput",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epr-fhir/StructureDefinition/ch-pixm-out-parameters"
    ]
  },
  "parameter" : [
    {
      "name" : "targetIdentifier",
      "valueIdentifier" : {
        "system" : "urn:oid:2.999.5.6.7",
        "value" : "value of MPI-PID"
      }
    },
    {
      "name" : "targetIdentifier",
      "valueIdentifier" : {
        "system" : "urn:oid:2.16.756.5.30.1.127.3.10.3",
        "value" : "value of EPR-SPID"
      }
    }
  ]
}

```
